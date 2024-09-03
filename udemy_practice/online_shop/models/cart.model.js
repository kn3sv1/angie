class Cart {
    constructor(items = [], totalQuantity = 0, totalPrice = 0) {
        this.items = items;
        this.totalQuantity = totalQuantity;
        this.totalPrice = totalPrice;
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
                cartItem.quantity = cartItem.quantity + 1;
                cartItem.totalPrice = cartItem.totalPrice + product.price;
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
}

module.exports = Cart;