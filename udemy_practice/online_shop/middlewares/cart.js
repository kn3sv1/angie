const Cart = require('../models/cart.model');

//This middleware will look at  at an incoming request and determine whether it's coming from a user who already has
//a cart or who doesn't have a cart yet. Either way, the cart should then be initialized correctly.

function initializeCart(req, res, next) {
    let cart;

    if (!req.session.cart) {
        cart = new Cart();
    } else {
        const sessionCart = req.session.cart;
        cart = new Cart(sessionCart.items, sessionCart.totalQuantity, sessionCart.totalPrice);
    }

    res.locals.cart = cart;

    next();
}

module.exports = initializeCart;