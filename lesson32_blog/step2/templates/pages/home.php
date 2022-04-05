<style type="text/css">
    .body-main {
        padding: 0 20px;
    }
    .body-main h1 {
        color: #ff0046;
        padding: 20px 0;
    }
</style>
<div class="body-main">
    <h1>Hello from Home Page</h1>
    <div class="book-info">
        <img src="images/book.png" />
    </div>

<?php

foreach (getCommentsForHomePage() as $comment) {
    echo '<a href="/angie/lesson32_blog/step2/?page=post-detail&id=' . $comment['comment_id'] . '">Name:' . $comment['name']
        . ', Comment:' . $comment['comment']
        . ', Datetime:' . $comment['datetime']
        . '</a><br />';
}
?>
</div>
