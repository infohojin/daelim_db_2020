<?php
$d = scandir("./");//현재 디렉토리에 있는 파일 목록

//배열로 반환
//print_r($i);
foreach($d as $v)
{
    if($v=="."|| $v=="..")continue;
    echo $v;
    echo"<br>";
}