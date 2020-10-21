<?php
$d = scandir("./");

// 배열로 반환....
//print_r($d);
foreach($d as $v) {
    if ($v == "." || $v == "..") continue;
    # if ($v == "..") continue;
    echo $v;
    echo "<br>";
}