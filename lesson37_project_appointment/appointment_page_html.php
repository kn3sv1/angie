
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
    <br /><br />
    Name:<br />
    <input type="text" name="name" value=""><br /><br />
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
    <input type="submit" value="SUBMIT FORM">
</form>


