<?php
$d = scandir("./"); // 파일 목록 배열로 반환
// print_r($d);

foreach ($d as $k => $v) {
    if ($v == "." || $v == "..") {
        continue;
    }
    echo '<a href="' . $v . '">' . $v . '</a>';
    echo "<br>";
}