const express = require('express');

const blogController = require('../controllers/post-controller');
const gaurdRoute = require('../middlewares/auth-protection-middleware');

const router = express.Router();


router.get('/', blogController.getHome);

router.use(gaurdRoute);

router.get('/admin', blogController.getAdmin);

router.post('/posts', blogController.createPost);

router.get('/posts/:id/edit', blogController.getSinglePost);

router.post('/posts/:id/edit', blogController.updatePost);

router.post('/posts/:id/delete', blogController.deletePost);

module.exports = router;
