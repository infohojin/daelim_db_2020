<?php
$d = scandir("./"); // 현제 디렉토리에 있는 파일 목록
//print_r($d); // 배열로 반환

foreach ($d as $v) {
    if ($v == "." || $v == "..") continue;
    echo $v;
    echo "<br>";
}
