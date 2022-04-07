<?php


$links = [
    'http://google.com/?post_id=6&roma=1',
    'http://google.com/?test=7&post_id=2',
    'http://google.com/?test=8&roma=3',
    'http://google.com/?test=9&roma=4',
    'http://google.com/?test=10&post_id=5',
];


//find all links who has post_id param

echo  '<pre>';
print_r($links);


// Declare a variable and initialize it with URL
$url = '//www.geeksforgeeks.org/path/kkkkk/?php=PHP&post_id=5';
//$url = '//www.geeksforgeeks.org/path/kkkkk/';
if (checkQuery($url, 'post_id')) {
    echo "It exists in {$url}";
} else {
    echo "It does not exist in {$url}";
}

// Use parse_url() function to
// parse the URL
//print_r(parse_url($url));


//step 1:
//use function parse_url to convert $url to array with key query
//step 2: parse_str use this function to convert string to associative array
//after ? we split those parameters into associative array

//step 3: check in array if I have post_id


function checkQuery($url, $key)
{
    $query = parse_url($url);
//print_r($query['query']);
//we should check first if key ['query'] exists before we do any further actions

    if (isset($query['query'])) {
        parse_str($query['query'], $myArray);
//print_r($myArray);

        if (isset($myArray[$key])) {
            //function shouldn't depend on specific text customer should have choice what message
            //to write that's why I wrote return true and commented the next line
            //echo "It exists in {$url}";
            return true;
        } else {
            //echo "It does not exist in {$url}";
            return false;
        }

    } else {
        //echo "It does not exist777777777 in {$url}";
        return false;
    }
}

function getValueFromQuery ($url, $key) {
    $query = parse_url($url);
//print_r($query['query']);
//we should check first if key ['query'] exists before we do any further actions

    if (isset($query['query'])) {
        parse_str($query['query'], $myArray);
//print_r($myArray);

        if (isset($myArray[$key])) {
            //function shouldn't depend on specific text customer should have choice what message
            //to write that's why I wrote return true and commented the next line
            //echo "It exists in {$url}";
            return $myArray[$key];
        } else {
            //echo "It does not exist in {$url}";
            return null;
        }

    } else {
        //echo "It does not exist777777777 in {$url}";
        return null;
    }
}

echo '<br /><br />';
$value = getValueFromQuery($url, 'post_id');
if ($value !== null) {
    echo "Value = $value";
    echo '<br /><br />';
} else {
    echo "It does not exist in {$url}";
}

foreach ($links as $link) {
    if (checkQuery($link, 'post_id')) {
        echo "It exists in {$link}";
        echo '<br />';
    } else {
        echo "It does not exist in {$link}";
        echo '<br />';
    }
}