<div class="cat_of_month">
    <?php foreach ($cats as $cat) { ?><div>
        <a href="index.php?page=detail&name=<?php echo $cat['name'] ?>"><img src="<?php echo $cat['main_photo'] ?>"></a>
        <p>
            <span>Name - <?php echo $cat['name'] ?></span><br />
            <span>City - <?php echo $cat['city'] ?></span><br />
            <a href="index.php?page=detail&name=<?php echo $cat['name'] ?>">Details</a><br />
        </p>
        </div><?php } ?>
</div>