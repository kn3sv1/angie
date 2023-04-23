function openPlayerConfig(event) {
    editedPlayer = +event.target.dataset.playerid;  // +'1' => 1
    playerConfigOverlayElement.style.display = 'block';
    backdropElement.style.display = 'block';
}

function closePlayerConfig() {
    playerConfigOverlayElement.style.display = 'none';
    backdropElement.style.display = 'none';
    formElement.firstElementChild.classList.remove('error');
    errorsOutputElement.textContent = '';
    formElement.firstElementChild.lastElementChild.value = '';
}

function savePlayerConfig(event) {
    event.preventDefault();
    console.log(event)
    const formData = new FormData(event.target);
    const enteredPlayername = formData.get('playername').trim() // '   Angie Neo  ' => 'Angie Neo';
    console.log(enteredPlayername);

    if (!enteredPlayername) { // enteredPlayername === ''
        event.target.firstElementChild.classList.add('error');
        errorsOutputElement.textContent = 'Please enter a valid name!';
        return;
    }

    const updatedPlayerDataElement = document.getElementById('player-' + editedPlayer + '-data');
    updatedPlayerDataElement.children[1].textContent = enteredPlayername;

/*    if (editedPlayer === 1) {
        players[0].name = enteredPlayername;
    } else {
        players[1].name = enteredPlayername;
    }*/
    // shorter way of writing the above code
    players[editedPlayer - 1].name = enteredPlayername;

    closePlayerConfig();
}