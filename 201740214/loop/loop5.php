<?php
$d = scandir("./"); // 현재  디렉토리에 있는 파일 몰곡


// 배열로 반환

//print_r($d);

foreach($d as $v) {
    if ($v == "." || $v == "..") continue;
    //if ($v == ".") continue;
    echo $v;
    echo "<br>";
}

// continue -> 제외하고 시작