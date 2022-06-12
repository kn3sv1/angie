<div class="cat_of_month">
    <div>
        <img src="<?php echo $cat['main_photo'] ?>">
        <p>
            <span>Name - <?php echo $cat['name'] ?></span><br />
            <span>City - <?php echo $cat['city'] ?></span><br />
        </p>
    </div>
    <br /><br /><br />
</div>
<?php if (!empty($cat['gallery'])) { ?>
    <div class="head_line">All photos of <?php echo $cat['name'] ?>:</div>
    <?php foreach ($cat['gallery'] as $photo) { ?>
        <img height="160" src="<?php echo $photo; ?>">
    <?php } ?>
<?php } ?>
