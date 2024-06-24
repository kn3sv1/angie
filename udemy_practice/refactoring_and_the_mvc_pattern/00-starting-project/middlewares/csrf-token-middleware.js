//This function should act as a regular express middleware and all express middlewares get requests and responses
//and this next function and I will then generate my CSRF token here, by calling req.csrfToken() as a method.
//That is possible, because the CSRF package adds this method.

function addCSRFToken(req, res, next) {
    res.locals.csrfToken = req.csrfToken();
    next();
}

module.exports = addCSRFToken;