const fs = require('fs');
const path = require('path');

const filePath = path.join(__dirname, '..', 'data', 'restaurants.json');

function getStoredRestaurants() {
    //fs.readfilesync reads the file from the disk synchronously, blocking the other processes until the operation
    //is finished.
    const fileData = fs.readFileSync(filePath);
    const storedRestaurants = JSON.parse(fileData);

    return storedRestaurants;
}

function storeRestaurants(storeableRestaurants) {
    fs.writeFileSync(filePath, JSON.stringify(storeableRestaurants));
}

module.exports = {
    getStoredRestaurants: getStoredRestaurants,
    storeRestaurants: storeRestaurants
};