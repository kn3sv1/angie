const db = require('../data/database');

class Order {
    constructor(cart, userData, status = 'pending', date, orderId) {
        this.productData = cart;
        this.userData = userData;
        this.status = status;
        this.date = new Date(date);
        if (this.date) {
            this.formattedDate = this.date.toLocaleDateString('en-US', {
                weekday: 'short',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
        }
        this.id = orderId;
    }

/*  In the save method, we then have to differentiate between the two cases that we are updating an
    existing order or that we're storing a brand new order. We can differentiate by checking if we
    have an ID. If this ID is truthy, then we are updating. Else, if it's not truthy, we are adding a new order.*/

    save() {
        if (this.id) {
            //Updating
        } else {
            const orderDocument = {
                userData: this.userData,
                productData: this.productData,
                date: new Date(),
                status: this.status
            };

            return db.getDb().collection('orders').insertOne(orderDocument);
        }
    }
}

module.exports = Order;