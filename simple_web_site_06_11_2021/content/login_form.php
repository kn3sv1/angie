<?php
session_start();

$sign_in = getInfo();

//print_r($sign_in);
if (!empty($_POST['username'])) {
    $currentUser = null;
    foreach ($sign_in as $user) {
        if ($user['name'] === trim($_POST['username']) && $user['password'] === trim($_POST['password'])) {
            $currentUser = $user;
        }
    }

    if ($currentUser === null) {
        echo '<p style="color:red">wrong credentials</p>';
    } else {
        $_SESSION['user'] = $currentUser;
    }
}


if (empty($_SESSION['user'])) { ?>
<form action="" method="post" enctype="multipart/form-data">
    <span style="color:#3333ff; font-weight: bold">USER NAME:</span><br />
    <input type="text" name="username" value="">
    <?php //printErrors($userErrors, 'name'); ?>
    <br /><br />
    <span style="color:#3333ff; font-weight: bold">PASSWORD:</span><br />
    <input type="text" name="password" value="">
    <?php //printErrors($userErrors, 'color'); ?>
    <br /><br />
    <input type="submit" value="login">
</form>
<br /><br />
<?php } else {
    echo 'Good morning ' . $_SESSION['user']['name'];
    echo '<br /><br />';
}  ?>
