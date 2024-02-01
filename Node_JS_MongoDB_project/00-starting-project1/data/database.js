const mongodb = require('mongodb');

const MongoClient = mongodb.MongoClient;


// global variable
let database;

async function connect() {
  // here we set global variable - connect
  const client = await MongoClient.connect('mongodb://localhost:27017');
    database = client.db('blog');
}

function getDb () {
// Just a security check
    //global variable should be already connected
    if (!database) {
        throw {message: 'Database connection not established!'};
    }
    return database;
}

module.exports = {
    connectToDatabase: connect,
    getDb: getDb
};

