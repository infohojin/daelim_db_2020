<?php
$d = scandir("./");
//print_r($d);
foreach($d as $v) {
    if ($v == "." || $v == "..") continue;
    //if ($v == "..") continue;
    echo $v;
    echo "<br>";
}