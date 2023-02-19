<?php

function occupation()
{
    if ($_GET["occupation"] == "audit") {
        echo "<h1>Auditor's name: " . $_GET["name"] . "</h1>";
        echo '<br/>';
        echo '<img src="photos/' . $_GET["name"] . '.png"  />';
    } elseif ($_GET["occupation"] == "accountant") {
        echo "<h1>Accuntant's name: " . $_GET["name"] . "</h1>";
        echo '<br/>';
        echo '<img src="photos/' . $_GET["name"] . '.png"  />';
    } elseif ($_GET["occupation"] == "secretary") {
        echo "<h1>Secretary's name: " . $_GET["name"] . "</h1>";
        echo '<br/>';
        echo '<img src="photos/' . $_GET["name"] . '.png"  />';
    } elseif ($_GET["occupation"] == "assistant") {
        echo "<h1>Assistant's name: " . $_GET["name"] . "</h1>";
        echo '<br/>';
        echo '<img src="photos/' . $_GET["name"] . '.png"  />';

    }
}

occupation();


