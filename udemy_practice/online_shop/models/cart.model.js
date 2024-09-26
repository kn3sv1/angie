const Product = require('./product.model');

class Cart {
    constructor(items = [], totalQuantity = 0, totalPrice = 0) {
        this.items = items;
        this.totalQuantity = totalQuantity;
        this.totalPrice = totalPrice;
    }

    async updatePrices() {
        const productIds = this.items.map(function (item) {
            return item.product.id;
        });

        const products = await Product.findMultiple(productIds);

        const deletableCartItemProductIds = [];

        for (const cartItem of this.items) {
            const product = products.find(function (prod) {
                return prod.id === cartItem.product.id;
            });

            if (!product) {
                // product was deleted!
                // "schedule" for removal from cart
                deletableCartItemProductIds.push(cartItem.product.id);
                continue;
            }

            // product was not deleted
            // set product data and total price to latest price from database
            cartItem.product = product;
            cartItem.totalPrice = cartItem.quantity * cartItem.product.price;
        }

        //The indexOf() method is another built in method in JavaScript that you can execute on arrays
        //which allows you to search for a specific value in an array and it will then return the index of that value.

        if (deletableCartItemProductIds.length > 0) {
            this.items = this.items.filter(function (item) {
                /*this function returns true if we want to keep an item (if it should not be filtered out)
                  or false if we want to drop an item. Filter will then return a new array and I set this new array
                  as my new items array.*/
                return deletableCartItemProductIds.indexOf(item.product.id) < 0;
            });
        }

        // re-calculate cart totals
        this.totalQuantity = 0;
        this.totalPrice = 0;

        for (const item of this.items) {
            this.totalQuantity = this.totalQuantity + item.quantity;
            this.totalPrice = this.totalPrice + item.totalPrice;
        }
    }

    //Now here for the cart, unlike for the product, we will not talk to an individual carts collection in the database.
    //We could do that, but instead here, I plan on storing the cart inside of a user's session.

    addItem(product) {
        const cartItem = {
            product: product,
            quantity: 1,
            totalPrice: product.price
        };

/*      Here I compare if the product that I fetch from the database is the same as the product I'm adding to the
        cart then I increment the quantity of that product by 1, I sum up the total price of that product, then all the
        quantities of all the products in the cart and thereafter the total price of all products.

        I also sum up all the quantities of all the products we have in the cart after adding a new product to the array
        and thereafter sum up the total price of all products (line 40 and 41).*/

        for (let i = 0; i < this.items.length; i++) {
            const item = this.items[i];
            if (item.product.id === product.id) {
                cartItem.quantity = item.quantity + 1;
                cartItem.totalPrice = item.totalPrice + product.price;
                this.items[i] = cartItem;

                //this.totalQuantity = this.totalQuantity + 1;
                this.totalQuantity++;
                //this.totalPrice = this.totalPrice + product.price;
                this.totalPrice += product.price;
                return;
            }
        }

            this.items.push(cartItem);
            this.totalQuantity++;
            this.totalPrice += product.price;

    }

    updateItem(productId, newQuantity) {
        for (let i = 0; i < this.items.length; i++) {
            const item = this.items[i];
            if (item.product.id === productId && newQuantity > 0) {
                const cartItem = { ...item };
                const quantityChange = newQuantity - item.quantity;
                cartItem.quantity = newQuantity;
                cartItem.totalPrice = newQuantity * item.product.price;
                this.items[i] = cartItem;

                this.totalQuantity = this.totalQuantity + quantityChange;
                this.totalPrice += quantityChange * item.product.price;
                return { updatedItemPrice: cartItem.totalPrice };
            } else if (item.product.id === productId && newQuantity <= 0) {
                this.items.splice(i, 1);
                this.totalQuantity = this.totalQuantity - item.quantity;
                this.totalPrice -= item.totalPrice;
                return { updatedItemPrice: 0 };
            }
        }
    }
}

module.exports = Cart;