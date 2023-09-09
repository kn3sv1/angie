const express = require('express');

const uuid = require('uuid');

const resData = require('../util/restaurant-data');

const router = express.Router();

router.get('/restaurants', function (req, res) {
    const storedRestaurants = resData.getStoredRestaurants();

    storedRestaurants.sort(function (resA, resB) {
        if (resA.name > resB.name) {
            return 1
        }
        return -1
    });

    res.render('restaurants', {
        numberOfRestaurants: storedRestaurants.length,
        restaurants: storedRestaurants
    });
});

router.get('/restaurants/:id', function (req, res) {
    const restaurantId = req.params.id;

    const storedRestaurants = resData.getStoredRestaurants();

    for (const restaurant of storedRestaurants) {
        if (restaurant.id === restaurantId) {
            return res.render('restaurant-detail', {restaurant: restaurant});
        }
    }

    res.render('404');
});

router.get('/confirm', function (req, res) {
    res.render('confirm');
});

router.get('/recommend', function (req, res) {
    res.render('recommend');
    // const htmlFilePath = path.join(__dirname, 'views', 'recommend.html');
    // res.sendFile(htmlFilePath);
});

router.post('/recommend', function (req, res) {
    const restaurant = req.body;
    restaurant.id = uuid.v4();

    const restaurants = resData.getStoredRestaurants();

    restaurants.push(restaurant);

    resData.storeRestaurants(restaurants);

    res.redirect('/confirm');
});

module.exports = router;