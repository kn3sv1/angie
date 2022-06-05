<?php


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

echo '<pre>';
print_r(getDateTime());

echo '<br /><br /><br /><br /><h1 style="color:red">OOP WAY</h1><br />';
//here we create oop way of array

$start = new DateTime();
echo "<br />" .$start->format('Y-m-d H:00:00');

// https://stackoverflow.com/questions/40543900/getting-the-date-and-numeric-weekday-in-php

//Monday would be 1 and Sunday would be 7
echo "<br />" . $start->format('N');


//step 1: we need to find day time closest working day and time
//if its Saturday or Sunday change $start to Monday 8:00

//TEST CASE 1: format return string we should not compae with 3 === becausse it will not work
//Also will work for Friday $currentHour >= 18
//TEST CASE 1.1: if today is a working day but time is 20:00. Example Friday 20:00
if (
        $start->format('N') == 6
        || $start->format('N') == 7
        //OR its Friday after 18:00 including
        || ($start->format('N') == 5 && (int)$start->format('G') >= 18)
) {
    $start->modify('first monday 08:00');
}
echo "<br />" . $start->format('Y-m-d H:00:00');


//TEST CASE 2: if today is a working day but time is 20:00. Example Monday 20:00
//https://www.php.net/manual/en/datetime.format.php
//$start->modify('20:00');
//echo "<br />" . $start->format('Y-m-d H:00:00');
//echo "<br />" . $start->format('G');

$currentHour = (int)$start->format('G');
$currentDayNumber = (int)$start->format('N');
//This condition only from Monday until Thursday when we can book next day
if ($currentDayNumber >= 1 && $currentDayNumber <= 4 && $currentHour >= 18) {
    $start->modify('next day 08:00');
}
echo "<br />" . $start->format('Y-m-d H:00:00');


//because it is object we need to CLONE = FULL COPY
$end = clone $start;
//P3M = period 3 months from start date
$end->add(new DateInterval('P3M'));
$end->modify('this friday 17:00');
echo "<br />" . $end->format('Y-m-d H:00:00');


//now we have start and end dates depending on current time in 3 months period and maybe 3 days more
echo "<br /><br />DATE TIMES:<br />";
$dates = [];
$currentDate = clone $start;
//AMOUNT of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
while($currentDate->getTimestamp() <= $end->getTimestamp()) {
    $day = (int)$currentDate->format('N');
    $time = (int)$currentDate->format('G');

    //https://www.php.net/manual/en/datetime.format.php
    $text = "<br />" . $currentDate->format('Y-m-d H:i:s') . ' (' .  $currentDate->format('l') . ')';
    /*
    $newDate = [
        'datetime' => $currentDate->format('Y-m-d H:i:s'),
        'day' => $currentDate->format('l'),
    ];
    */
    //TEMPORARY SAVE IN VARIBLE DATETIME
    $newDate = $currentDate->format('Y-m-d H:i:s');

    //we always need to modify even with CONTINUE - OTHERWISE WHILE(...) will work forEVER
    $currentDate->add(new DateInterval('PT1H'));

    if ($day === 6 || $day === 7) {
        continue;
    }

    if ($time < 8 || $time >= 18) {
        continue;
    }

    $dates[] = $newDate;
    echo $text;
}

//$reservedDate = '2022-07-20 10:00:00';
////FROM JSON FILE
//$myOWNRESERVEDARRAY = ['2022-07-20 10:00:00', '2022-07-20 11:00:00'];
//print_r($dates);
//
//if (in_array($reservedDate, $myOWNRESERVEDARRAY)) {
//    echo "<br >$reservedDate IS RESERVED<br />";
//}

//NOW WE NED TO REGROUP ARRAY ADD 'reserved' => false bla bla bla...
echo "<br /><br /><br /><br /><br /><br />";