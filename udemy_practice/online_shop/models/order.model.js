const mongodb = require('mongodb');

const db = require('../data/database');

class Order {
    // Status => pending, fulfilled, cancelled
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

    static transformOrderDocument(orderDoc) {
        return new Order(
            orderDoc.productData,
            orderDoc.userData,
            orderDoc.status,
            orderDoc.date,
            orderDoc._id
        );
    }

    static transformOrderDocuments(orderDocs) {
        return orderDocs.map(this.transformOrderDocument);
    }

    static async findAll() {
        const orders = await db
            .getDb()
            .collection('orders')
            .find()
            .sort({ _id: -1 })
            .toArray();

        return this.transformOrderDocuments(orders);
    }

    static async findAllForUser(userId) {
        const uid = new mongodb.ObjectId(userId);

        const orders = await db
            .getDb()
            .collection('orders')
            .find({ 'userData._id': uid })
            .sort({ _id: -1 })
            .toArray();

        return this.transformOrderDocuments(orders);
    }

    static async findById(orderId) {
        const order = await db
            .getDb()
            .collection('orders')
            .findOne({ _id: new mongodb.ObjectId(orderId) });

        return this.transformOrderDocument(order);
    }

/*  In the save method, we then have to differentiate between the two cases that we are updating an
    existing order or that we're storing a brand new order. We can differentiate by checking if we
    have an ID. If this ID is truthy, then we are updating. Else, if it's not truthy, we are adding a new order.*/

    save() {
        if (this.id) {
            const orderId = new mongodb.ObjectId(this.id);

            return db
                .getDb()
                .collection('orders')
                .updateOne({ _id: orderId }, { $set: { status: this.status } });
        } else {
            const orderDocument = {
                userData: this.userData,
                productData: this.productData,
                date: new Date(),
                status: this.status
            };

            return db
                .getDb()
                .collection('orders')
                .insertOne(orderDocument);
        }
    }
}

module.exports = Order;