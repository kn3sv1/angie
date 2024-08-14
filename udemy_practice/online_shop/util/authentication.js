function createUserSession(req, user, action) {
    req.session.uid = user._id.toString();
    req.session.isAdmin = user.isAdmin;
    req.session.save(action);
}

function destroyUserAuthSession(req) {
    req.session.uid = null;
    // roma solution from internet - check MONGO after LOGOUT
    // req.session.destroy();
}

module.exports = {
    createUserSession: createUserSession,
    destroyUserAuthSession: destroyUserAuthSession
};