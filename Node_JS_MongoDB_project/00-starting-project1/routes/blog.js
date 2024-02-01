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

  const result = await db.getDb().collection('posts').insertOne(newPost);
  console.log(result);
  res.redirect('/posts');
});

router.get('/posts/:id', async function (req, res) {
  const postId = req.params.id;
  //find the first document that matches a certain condition and exclude summary - if you exclude one field ({summary: 0}) all other fields are
  //included by default
  const post = await db.getDb().collection('posts').findOne({_id: new ObjectId(postId)}, {summary: 0});

  //security check - url - if post is undefined/falsy - if user entered a url manually with an ID that doesn't exist
  if (!post) {
    return res.status(404).render('404');
  }

  res.render('post-detail', {post: post});
});

module.exports = router;