<?php

//<div class="body-main">
//    <div class="m-block">main-111</div>
//    <div class="m-block">main-222</div>
//    <div class="m-block">main-333</div>
//</div>

$posts = getPostsArray();

//print_r($_GET['id']);

$post = [];
foreach ($posts as $p) {
    if ($p['id'] == $_GET['id']) {
        $post = $p;
    }
}
//print_r($post);

echo '<div class="body-main">';
?>
<style type="text/css">
    .m-block .datetime-css {
        color: #ff0046;
    }
    .m-block .text-css {
        padding-top: 20px;
        color: #3b24ff;
    }
    .m-block .tags-css {
        padding: 10px 0;
        color: #ff00c6;
    }
</style>
<?php

    echo '<div class="m-block">';

    echo '<h2 class="title-css">' . $post['title'] .  '</h2>';
    echo '<p class="datetime-css">' . $post['datetime'] .  '</p>';
    echo '<p class="text-css">' . $post['text'] .  '</p>';

    echo '<p class="tags-css">';
    foreach ($post['tags'] as $tag) {
        echo $tag.", ";
    }
    echo '</p>';

    echo '</div>';
?>
<?php
$comments = getPostCommentsArray();
if(!empty($_POST['comment'])) {
    $comments[] = [
        'name' => $_POST['name'],
        'datetime' => date('Y-m-d H:i:s'),
        'comment' => $_POST['comment'],
        'comment_id' => $post['id']
    ];
    savePostComments($comments);
}
?>
<?php
    foreach (getCommentsByPostId($comments, $post['id']) as $comment) {
        echo '<p>Name:' . $comment['name']
            . ', Comment:' . $comment['comment']
            . ', Datetime:' . $comment['datetime']
            . '</p><br />';
    }
?>
    <form action="" method="post">
        NAME:<br />
        <input type="text" name="name" value=""  style="width:70%;"><br /><br />
        COMMENT:<br />
        <textarea name="comment" rows="4"  style="width:100%;"></textarea> <br /><br />
        <input type="submit" name="submit" value="SUBMIT">
    </form>

<?php
echo '</div>';