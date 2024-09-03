//I get product data from the database with a specific ID. The ID which I expect to get should be found in the request body
//because I won't send a get request, but a post request for adding a new cart item.

const Product = require('../models/product.model');

async function addCartItem(req, res, next) {
    let product;
    try {
        product = await Product.findById(req.body.productId);
    } catch (error) {
      next(error);
      return;
    }

    //I store the cart in a user's session because this cart has to be connected to this user even if this user is not
    //logged in.

    const cart = res.locals.cart;
    cart.addItem(product);
    req.session.cart = cart;

    console.log(req.session.cart);

    //201 is a success status code that also says: successfully added data, so to say.
    //newTotalItems will return the number of items that are now stored in the cart.
    res.status(201).json({
        message: 'Cart updated!',
        newTotalItems: cart.totalQuantity
    });
}

module.exports = {
    addCartItem: addCartItem
};