const cartItemUpdateFormElements = document.querySelectorAll('.cart-item-management');
const cartTotalPriceElement = document.getElementById('cart-total-price');
const cartBadges = document.querySelectorAll('.nav-items .badge');

async function updateCartItem(event) {
    event.preventDefault();

    const form = event.target;

    const productId = form.dataset.productid;
    const csrfToken = form.dataset.csrf;
    const quantity = form.firstElementChild.value;

    let response;
    try {
        response = await fetch('/cart/items', {
            method: 'PATCH',
            body: JSON.stringify({
                productId: productId,
                quantity: quantity,
                _csrf: csrfToken
            }),
            headers: {
                'Content-Type': 'application/json'
            }
        });
    } catch (error) {
        alert('Something went wrong!');
        return;
    }

    //If there is no technical problem, but we have an error status code that is sent back.
    if (!response.ok) {
        alert('Something went wrong!');
        return;
    }
    // https://fetch.spec.whatwg.org/#fetch-method
    // Returns a promise fulfilled with requestOrResponse’s body parsed as JSON.
    // we don't want a promise, we want a result so we use await = wait for result and return it.
    // inside of a promise we have a result and we need to wait for it.
    const responseData = await response.json();

    if (responseData.updatedCartData.updatedItemPrice === 0) {
        form.parentElement.parentElement.remove();
    } else {
        const cartItemTotalPriceElement = form.parentElement.querySelector('.cart-item-price');
        cartItemTotalPriceElement.textContent = responseData.updatedCartData.updatedItemPrice.toFixed(2);
    }

    cartTotalPriceElement.textContent = responseData.updatedCartData.newTotalPrice.toFixed(2);

    for (const cartBadge of cartBadges) {
        cartBadge.textContent = responseData.updatedCartData.newTotalQuantity;
    }

}

for (const formElement of cartItemUpdateFormElements) {
    formElement.addEventListener('submit', updateCartItem);
}