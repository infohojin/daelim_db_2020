<?php
$daelim = "hello"; // " 가능
echo $daelim;

$univ = 'world';// ' 가능
echo $univ;

// 밖의 따옴표는 표시x, 안에있는 따옴표만 출력
$hi = "hello 'world'.. ";
echo $hi;

$hi = 'hello "world".. ';
echo $hi;

$name = "안녕하세요 \"대림이\"입니다.";
echo $name;

//$name = "안녕하세요';