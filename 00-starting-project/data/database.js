const mysql = require('mysql2/promise');

//localhost is the url of our database server because it is running locally on our machine
//and uses a different port number - 3306

//database: requires the name of the database/schema we want to connect to
const pool = mysql.createPool({
    host: 'localhost',
    database: 'blog',
    user: 'root',
    password: ''
});

module.exports = pool;