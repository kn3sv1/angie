<?php

function getCssStyle($current_value, $max, $min) {
    if ($current_value == $max) {
        return ' class="max" ';
    } elseif ($current_value == $min) {
        return ' class="min" ';
    }
    return '';
}

//make array only numbers
$numbers = array();
for($i = 0; $i < count($my_array['photos']); $i++) {
    $numbers[] = $my_array['photos'][$i]['likes'];
}

$max = max($numbers);
$min = min($numbers);
?>
<h2>Ginger's personal page</h2>
<img src="cat_pages/images2/ginger.png" alt="Trulli" width="500" height="333">
<br /><br />


<style type="text/css">
    table, td {
        border: 1px solid;
    }
    .max {
        background-color: red;
    }
    .min {
        background-color: green;
    }
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Photo</th>
    </tr>
    <tr>
        <td>Child1</td>
        <td><img src="cat_pages/hitler_children/child1.png"  width="100" ></td>
    </tr>
    <tr>
        <td>Child2</td>
        <td><img src="cat_pages/hitler_children/child2.png"  width="100" ></td>
    </tr>
    <tr>
        <td>Child3</td>
        <td><img src="cat_pages/hitler_children/child3.png"  width="100" ></td>
    </tr>
</table>

<br /><br /><br /><br />

<table>
    <tr>
        <th>Title</th>
        <th>Photo</th>
        <th>Likes</th>
        <th>Dislikes</th>
    </tr>

    <?php for($i = 0; $i < count($my_array['photos']); $i++) {
            $photo = $my_array['photos'][$i];
    ?>
    <tr  <?php echo getCssStyle($photo['likes'], $max, $min); ?>>
        <td><?php echo $photo['title']; ?></td>
        <td><img src="<?php echo $photo['photo']; ?>"  width="100" ></td>
        <td><?php echo $photo['likes']; ?></td>
        <td><?php echo $photo['dislikes']; ?></td>
    </tr>
    <?php } ?>
</table>