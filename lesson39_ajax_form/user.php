<?php


$data = [
    "userName" => "hello",
    "userAge" => "111",
];
echo json_encode($data);


//
//
//// data from POST by content-type JSON
//$json = file_get_contents('php://input');
//$data = json_decode($json , true); //convert string to php array
//
//if (!empty($data['userName'])) {
//
//    if ($data['userName'] === 'Angie') {
//        $data['userName']  = 'Malaka: ' . $data['userName'];
//    }
//}
//
//
////send back what we received. Send back as json string and javascript will parse this JSON
//echo json_encode($data);