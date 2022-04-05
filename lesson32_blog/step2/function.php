<?php


function getCommentsForHomePage() {
    $data = [];
    $commentsOriginal = getPostCommentsArray();
    //step 1: Transform array grouped by comment id
    foreach ($commentsOriginal as $comment) {
        $comment_id = $comment['comment_id'];
        //if it is not SET create EMPTY array
        if (!isset($data[$comment_id])) {
            $data[$comment_id] = [];
        }
        $data[$comment_id][] = $comment;
    }

    //echo '<pre>';
    //print_r($data);

    //step 2: Change sort inside grouped array
    foreach ($data as $k => $comments) {
        //$comments - it is copy inside data array

        //we modify $comments
        //https://stackoverflow.com/questions/10000005/php-sort-array-by-field
        usort($comments, function ($a, $b) {
            $time1 = strtotime($a["datetime"]);
            $time2 = strtotime($b["datetime"]);

            return $time2 - $time1;
        });

        //write back to original array
        $data[$k] = $comments;
    }

    //echo '<pre>';
    //print_r($data);

    //Step 3: Transform back to original array
    $result = [];
    foreach ($data as $comments) {
        $result[]  = $comments[0];
    }
    //echo '<pre>';
    //print_r($result);

    return $result;

    //return $commentsOriginal;
}

function getCommentsByPostId($comments, $id) {
    $data = [];
    foreach ($comments as $comment) {
        if ($comment['comment_id'] == $id) {
            $data[] = $comment;
        }
    }

    return $data;
}

function getPostCommentsArray() {
    return getArrayFromFile("data/post-comments.json");
}

function savePostComments($arr) {
    saveArrayToFile("data/post-comments.json", $arr);
}

function getBookOrderArray() {
    return getArrayFromFile("data/book-order-form.json");
}

function saveBookOrder($arr) {
    saveArrayToFile("data/book-order-form.json", $arr);
}

function getPostsArray() {
    return getArrayFromFile("data/posts.json");
}

function savePostsToFile($arr) {
    saveArrayToFile("data/posts.json", $arr);
}

function getTopMenuArray() {
    return getArrayFromFile("data/top-menu.json");
}

function saveTopMenuToFile($arr) {
    saveArrayToFile("data/top-menu.json", $arr);
}

function getFooterMenuArray() {
    return getArrayFromFile("data/footer-menu.json");
}

function saveFooterMenuToFile($arr) {
    saveArrayToFile("data/footer-menu.json", $arr);
}


function getArrayFromFile($file) {
    //$file = "cats/data.json";
    $data = array();
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json, true);
    }
    return $data;
}

function saveArrayToFile($file, $arr) {
    //$file = "cats/data.json";
    $json = json_encode($arr, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}
