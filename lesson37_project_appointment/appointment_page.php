<?php
//before we write any code we group our dates by date for html to easily work with this array
function getDateTime() {
    return [
        '2022-05-01' => [
            'day' => 'Monday', 'data' => [
                ['datetime' => '2022-05-01 08:00', 'reserved' => false],
                ['datetime' => '2022-05-01 09:00', 'reserved' => false],
                ['datetime' => '2022-05-01 10:00', 'reserved' => false],
                ['datetime' => '2022-05-01 11:00', 'reserved' => false],
                ['datetime' => '2022-05-01 12:00', 'reserved' => true],
            ],
        ],
        '2022-05-02' => [
            'day' => 'Tuesday', 'data' => [
                ['datetime' => '2022-05-02 08:00', 'reserved' => false],
                ['datetime' => '2022-05-02 09:00', 'reserved' => false],
                ['datetime' => '2022-05-02 10:00', 'reserved' => false],
                ['datetime' => '2022-05-02 11:00', 'reserved' => false],
                ['datetime' => '2022-05-02 12:00', 'reserved' => true],
            ]
        ]
    ];
}

$errors = [];
$dateTimes = getDateTime();

//$errors['id'] = '* Digits only parakalo';

    //we submit here form
    if (!empty($_POST['submit'])) {
        $id = $_POST['id'];
        //lets clean $id from spaces. We replace spaces with EMPTY
        $id = str_replace(" ","",$id);
        if (empty($id)) {
            $errors['id'] = '* please provide value';
         //empty value is not numeric 0 is numeric so spaces between will show error
        } elseif (!is_numeric($id)) {
            $errors['id'] = '* Digits only parakalo';
        }

        //lets check name
        $name = $_POST['name'];
        if (empty($name)) {
            $errors['name'] = '* please provide value';
        } elseif (is_numeric($name)) {
            $errors['name'] = '* Letters only parakalo';
        } elseif (strlen($name) < 3 || strlen($name) > 10 ) {
            $errors['name'] = '* Name should be not smaller than 3 letters and not bigger than 10 please';
        }



    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info page</title>
</head>
<body style="background-color:lightgray;">
<h2 style="color:purple" >BOOK YOUR APPOINTMENT BELLOW</h2>
<form action="" method="post">
    ID Number:<br />
    <input type="text" name="id" value="">
    <?php if (!empty($errors['id'])) {
        echo '<p style="color: red">' . $errors['id'] . '</p>';
    }
    ?>
    <br /><br />
    Name:<br />
    <input type="text" name="name" value="">
    <?php if (!empty($errors['name'])) {
        echo '<p style="color: red">' . $errors['name'] . '</p>';
    }
    ?>
    <br /><br />
    Surname:<br />
    <input type="text" name="surname" value=""><br /><br />
    Telephone:<br />
    <input type="text" name="telephone" value="">
    <p style="color: red">* Digits only</p>
    <br /><br />
    Prescribe your symptoms here:<br />
    <textarea name="symptoms" rows="4" cols="50"></textarea>
    <br /><br />
    <p style="color:purple; font-size:20px">Please select a date and time at your convenience<p/>
    <label for="date"; style="color:mediumpurple; font-size:20px;">Date</label>

    <select name="datetime">
    <?php foreach ($dateTimes as $dateKey => $dateItem) { ?>
        <optgroup label="<?php echo $dateKey . ' (' . $dateItem['day'] . ')'; ?>">
            <?php foreach ($dateItem['data'] as $item) {
                    $disabled = $item['reserved'] === true ? ' disabled="disabled" ': '';
                    //$text = '09:00 (already reserved)';
                    //we separate in array value of $item['datetime'] by space to get only time
                    //then we print_r to see which index to use to find value
                    $dateParts = explode(' ', $item['datetime']);
                    //print_r($dateParts);
                    //die();
                    $text = $dateParts[1]  . ($item['reserved'] === true  ? ' (already reserved)' : '');
                ?>
                <option <?php echo $disabled; ?> value="<?php echo $item['datetime']; ?>"><?php echo $text; ?></option>
            <?php } ?>
        </optgroup>
    <?php } ?>
    </select>



    <select name="datetime">
        <optgroup label="2022-05-01 (Monday)">
            <option value="2022-05-01 08:00">08:00</option>
            <option disabled="disabled" value="2022-05-01 09:00">09:00 (already reserved)</option>
            <option value="2022-05-01 10:00">10:00</option>
            <option value="2022-05-01 12:00">12:00</option>
            <option value="2022-05-01 13:00">13:00</option>
            <option value="2022-05-01 14:00">14:00</option>
            <option value="2022-05-01 18:00">18:00</option>
            <option value="2022-05-01 11:00">11:00</option>
        </optgroup>
        <optgroup label="2022-05-02 (Friday)">
            <option value="2022-05-02 08:00">08:00</option>
            <option value="2022-05-02 09:00">09:00</option>
        </optgroup>
    </select>
    <br /><br /><br /><br />
    <input type="submit" name="submit" value="SUBMIT FORM">
</form>


