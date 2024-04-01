const express = require('express');

const mongodb = require('mongodb');

const db = require('../data/database');

const ObjectId = mongodb.ObjectId;

const router = express.Router();

router.get('/', function(req, res) {
  res.redirect('/posts');
});

router.get('/posts', async function(req, res) {

//When working with the latest version of the NodeJS driver we should use the separate project() method to add projection like this:
  //.find({}).project({title: 1, summary: 1, 'author.name': 1})
  const posts = await db.getDb().collection('posts').find({}, {title: 1, summary: 1, 'author.name': 1}).toArray();
  res.render('posts-list', {posts: posts});
});

router.get('/new-post', async function(req, res) {
  const authors = await db.getDb().collection('authors').find().toArray();
  console.log(authors);
  res.render('create-post', {authors: authors});
});

router.post('/posts', async function (req, res) {
  const authorId = new ObjectId(req.body.author);
  const author = await db.getDb().collection('authors').findOne({_id: authorId});

  const newPost = {
    title: req.body.title,
    summary: req.body.summary,
    body: req.body.content,
    date: new Date(),
    author: {
      id: authorId,
      name: author.name,
      email: author.email
    }
  };
  //Here we create a posts collection by inserting a new document
  const result = await db.getDb().collection('posts').insertOne(newPost);
  console.log(result);
  res.redirect('/posts');
});

router.get('/posts/:id', async function (req, res, next) {
  let postId = req.params.id;

  try {
    postId = new ObjectId(postId);
  } catch (error) {
    //Here we directly return the response we want to return e.g. the 404 page
    return res.status(404).render('404');
    //If things go wrong we want the request to move on to the default error handling middleware and all we have to do is pass
    //this error object into next() and return that function execution (to make sure that no code executes thereafter)
    //return next(error);
  }
  //find the first document that matches a certain condition and exclude summary - if you exclude one field
  // ({summary: 0}) all other fields are included by default
  const post = await db.getDb().collection('posts').findOne({_id: new ObjectId(postId)}, {summary: 0});

  //security check - url - if post is undefined/falsy - if user entered a url manually with an ID that doesn't exist
  if (!post) {
    return res.status(404).render('404');
  }

  //Here we are adding a new property to an existing object by accessing a property that doesn't exist yet with the
  //dot notation and setting a value to it.
  post.humanReadableDate = post.date.toLocaleDateString('en-US', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });

  //Here we overwrite the date property to give us a machine readable version of that date.
  post.date = post.date.toISOString();

  res.render('post-detail', {post: post});
});

router.get('/posts/:id/edit', async function (req, res) {
  const postId = req.params.id;
  const post = await db.getDb().collection('posts').findOne({_id: new ObjectId(postId)}, {title: 1, summary: 1, body: 1});

  if (!post) {
    return res.status(404).render('404');
  }

  res.render('update-post', {post: post});
});

router.post('/posts/:id/edit', async function (req, res) {
    const postId = new ObjectId(req.params.id);
    const result = await db.getDb().collection('posts').updateOne({_id: postId},
        {
          $set: {
            title: req.body.title,
            summary: req.body.summary,
            body: req.body.content,
            // we can use this if we want to set the date to the current date whenever a post is updated
            //date: new Date()
          }

        });
    res.redirect('/posts');
});

router.post('/posts/:id/delete', async function (req, res) {
    const postId = new ObjectId(req.params.id);
    const result = await db.getDb().collection('posts').deleteOne({_id: postId});
    console.log(result);

    res.redirect('/posts');
});

module.exports = router;