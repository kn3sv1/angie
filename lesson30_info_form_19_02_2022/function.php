<?php

function validation($errors, $key) {
    if ($key == 'address' && empty($_POST[$key])) {
        $errors[$key] = "*Required address";
        return $errors;
    }
    if (empty($_POST[$key])) {
        $errors[$key] = "*Required field";
    } elseif (strlen($_POST[$key]) < 3) {
    //} elseif (strlen($_POST[$key] < 3)) {
        $errors[$key] = "Characters need to be more than 3";
    }
        return $errors;
}

function printError($errors, $key) {
    if (!empty($errors[$key])) {
        echo  '<span style="color:red">' . $errors[$key] . '</span>';
    }
}

//if I dont load array and I just save it I will just overwrite all file with
//one array that I submit.

function getInfo() {
    $file = "info/data.json";
    $data = array();
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json,true);
    }

    return $data;
}


function saveInfo(array $info) {
    $file = "info/data.json";
    $json = json_encode($info, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

?>