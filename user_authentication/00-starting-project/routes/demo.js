const express = require('express');
const bcrypt = require('bcryptjs');
const session = require('express-session');
const mongodbStore = require('connect-mongodb-session');

const db = require('../data/database');

const router = express.Router();

router.get('/', function (req, res) {
  let a = "5";
  let b = 6;
  let c = a + b;
  console.log("C = ", c);
  res.render('welcome');
});

router.get('/signup', function (req, res) {
  res.render('signup');
});

router.get('/login', function (req, res) {
  res.render('login');
});

router.post('/signup', async function (req, res) {
  const userData = req.body;
  const enteredEmail = userData.email;
  console.log(enteredEmail);
  const enteredConfirmEmail = userData['confirm-email'];
  const enteredPassword = userData.password;

  if (
      !enteredEmail ||
      !enteredConfirmEmail ||
      !enteredPassword ||
      enteredPassword.trim() < 6 ||
      enteredEmail !== enteredConfirmEmail ||
      !enteredEmail.includes('@')
  ) {
    console.log('Incorrect data');
    return res.redirect('/signup');
  }

  const existingUser = await db.getDb().collection('users').findOne({email: enteredEmail});
  console.log(existingUser);

  if (existingUser) {
    console.log('User exists already');
    return res.redirect('/signup');
  }

  const hashedPassword = await bcrypt.hash(enteredPassword, 12);

  const user = {
    email: enteredEmail,
    password: hashedPassword
  };

  await db.getDb().collection('users').insertOne(user);

  res.redirect('/login');
});

router.post('/login', async function (req, res) {
  const userData = req.body;
  const enteredEmail = userData.email;
  const enteredPassword = userData.password;

  console.log(enteredPassword);

  const existingUser = await db.getDb().collection('users').findOne({email: enteredEmail});

  if (!existingUser) {
    console.log('Could not log in!');
    return res.redirect('/login');
  }

  const passwordsAreEqual = await bcrypt.compare(enteredPassword, existingUser.password);

  if (!passwordsAreEqual) {
    console.log('Could not log in - passwords are not equal!');
    return res.redirect('/login');
  }

  console.log('User is authenticated!');

  req.session.user = { id: existingUser._id, email: existingUser.email };
  console.log(req.session.user.email);
  // req.session.isAuthenticated = true;
  req.session.save(function () {
    console.log(req.session.user.email);
     res.redirect('/admin');
  });

});

router.get('/admin', function (req, res) {
  // if (!req.session.isAuthenticated) { //if (!req.session.user)
  console.log(req.session.user);
     if (!req.session.user) {
    return res.status(401).render('401');
  }
  res.render('admin');
});

router.post('/logout', function (req, res) {});

module.exports = router;
