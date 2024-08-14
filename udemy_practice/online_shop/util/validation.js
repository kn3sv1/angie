//Longer way - not efficient

/*function userDetailsAreValid(email, password, name, street, postal, city) {
    return (
        email &&
        email.includes('@') &&
        password &&
        password.trim().length >= 6 &&
        name &&
        name.trim() !== '' &&
        street &&
        street.trim() !== '' &&
        postal &&
        postal.trim() !== '' &&
        city &&
        city.trim() !== ''
    );
}*/

//Helper function or utility method
function isEmpty(value) {
    return !value || value.trim() === '';
}

//Helper function or utility method
function userCredentialsAreValid(email, password) {
    return (
        email &&
        email.includes('@') &&
        password &&
        password.trim().length >= 6
    );
}

//Main function
function userDetailsAreValid(email, password, name, street, postal, city) {
    return (
        userCredentialsAreValid(email, password) &&
        !isEmpty(name) &&
        !isEmpty(street) &&
        !isEmpty(postal) &&
        !isEmpty(city)
    );
}

function emailIsConfirmed(email, confirmEmail) {
    return email === confirmEmail;
}

module.exports = {
    userDetailsAreValid: userDetailsAreValid,
    emailIsConfirmed: emailIsConfirmed
};