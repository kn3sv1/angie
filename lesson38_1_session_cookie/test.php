<?php

$cookie_name = 'city';



if (!empty($_POST['city'])) {
    setcookie($cookie_name, $_POST['city'], time() + (86400 * 30), "/");

    //emulate that we have this cookie array
    $_COOKIE[$cookie_name] = $_POST['city'];
}

if (!empty($_COOKIE[$cookie_name])) { ?>

Good morning in <?php echo $_COOKIE[$cookie_name]; ?>
<br /><img src="photos/dog.png">


<?php } else{ ?>
    <form action="" method="post">
        <label for="city">Choose a city:</label>
        <select name="city" id="city">
            <option value="limassol">Limassol</option>
            <option value="paphos">paphos</option>
            <option value="larnaka">Larnaka</option>
            <option value="nicosia">Nicosia</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
<?php } ?>
<p>
    To delete cookie press: <a target="_blank" href="/angie/lesson38_1_session_cookie/test_delete_cookie.php">delete cookie</a>
</p>
