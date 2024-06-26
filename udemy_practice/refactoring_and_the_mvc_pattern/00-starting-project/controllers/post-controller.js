const Post = require('../models/post');
const validationSession = require('../util/validation-session');
const validation = require('../util/validation');

function getHome(req, res) {
    res.render('welcome');
}

async function getAdmin (req, res) {

    const posts = await Post.fetchAll();

    sessionErrorData = validationSession.getSessionErrorData(req, {
        title: '',
        content: ''
    });

    res.render('admin', {
        posts: posts,
        inputData: sessionErrorData,
    });
}

async function createPost(req, res) {
    const enteredTitle = req.body.title;
    const enteredContent = req.body.content;

    if (
        !validation.postIsValid(enteredTitle, enteredContent)
    ) {

        validationSession.flashErrorsToSession(
          req,
            {
                message: 'Invalid input - please check your data.',
                title: enteredTitle,
                content: enteredContent,
            },
            function () {
                res.redirect('/admin');
            }
        );

        return;
    }

    const post = new Post(enteredTitle, enteredContent);
    await post.save();

    res.redirect('/admin');
}

async function getSinglePost(req, res) {
    const post = new Post(null, null, req.params.id);
    await post.fetch();

    if (!post.title || !post.content) {
        return res.render('404'); // 404.ejs is missing at this point - it will be added later!
    }

    sessionErrorData = validationSession.getSessionErrorData(req, {
        title: post.title,
        content: post.content
    });

    res.render('single-post', {
        post: post,
        inputData: sessionErrorData,
    });
}

async function updatePost(req, res) {
    const enteredTitle = req.body.title;
    const enteredContent = req.body.content;

    if (
        !validation.postIsValid(enteredTitle, enteredContent)
    ) {

       validationSession.flashErrorsToSession(
         req,
           {
               message: 'Invalid input - please check your data.',
               title: enteredTitle,
               content: enteredContent,
           },
           function () {
               res.redirect(`/posts/${req.params.id}/edit`);
           }
       );

        return;
    }

    const post = new Post(enteredTitle, enteredContent, req.params.id);
    await post.save();

    res.redirect('/admin');
}

async function deletePost(req, res) {
    //we pass null as values for title and content to make it clear that here I don't have any title
    //or content because I'm not creating this instance of the post class to work on that existing post.
    //Instead, I'm creating it like this, just to delete it.
    const post = new Post(null, null, req.params.id);
    await post.delete();

    res.redirect('/admin');
}

module.exports = {
    getHome: getHome,
    getAdmin: getAdmin,
    createPost: createPost,
    getSinglePost: getSinglePost,
    updatePost: updatePost,
    deletePost: deletePost
};