<style type="text/css">
    .body-main {
        padding: 0 20px;
    }
    .body-main h1 {
        color: #ff0046;
        padding: 20px 0;
    }
    .body-main .book-info {
        float: left;
    }
    .body-main .my-form {
        float: left;
        padding-left: 20px;
        padding-bottom: 50px;
        width: 300px;
    }
</style>
<?php

$formSuccessMsg = '';
if(!empty($_POST['name'])) {
    $formSuccessMsg = '<p style="color:green;font-size:20px">Your order has been placed youll receive an email shortly</p>';
    $orders = getBookOrderArray();
    $orders[] = [
        'name' => $_POST['name'],
        'datetime' => date('Y=m=d H:i:s'),
        'surname' => $_POST['surname'],
        'address' => $_POST['address']
    ];
    saveBookOrder($orders);
}

?>
<div class="body-main">
    <h1>Book orders</h1>
    <p>On this page, you’ll find ordering information for my book Train Your Dog Now!  Your Instant Training Handbook, From Behavior Fixes to Basic Commands.  </p>
    <br />
    <div>
        <div class="book-info">
            <img src="images/book.png" />
        </div>
        <div class="my-form">
            <?php echo $formSuccessMsg; echo '<br />'?>
            <form action="" method="post">
                NAME:<br />
                <input type="text" name="name" value=""  style="width:70%;"><br /><br />
                SURNAME:<br />
                <input type="text" name="surname" value=""  style="width:70%;"><br /><br />
                EMAIL ADDRESS:<br />
                <input type="text" name="email" value=""  style="width:70%;"><br /><br />
                ADDRESS:<br />
                <textarea name="address" rows="4"  style="width:100%;"></textarea> <br /><br />
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
