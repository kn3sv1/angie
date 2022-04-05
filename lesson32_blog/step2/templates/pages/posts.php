<?php

//<div class="body-main">
//    <div class="m-block">main-111</div>
//    <div class="m-block">main-222</div>
//    <div class="m-block">main-333</div>
//</div>

$posts = getPostsArray();

echo '<div class="body-main">';
?>
<style type="text/css">
    .m-block .datetime-css {
        color: #ff0046;
    }
    .m-block .description-css {
        color: #3b24ff;
    }
</style>
<?php
foreach ($posts as $post) {
    echo '<div class="m-block">';

    echo '<p><a href="/angie/lesson32_blog/step2/?page=post-detail&id=' . $post['id']. '">' . $post['title'] .  '</a></p>';
    echo '<p class="datetime-css">' . $post['datetime'] .  '</p>';
    echo '<p class="description-css">' . $post['description'] .  '</p>';

    echo '</div>';
}

echo '</div>';