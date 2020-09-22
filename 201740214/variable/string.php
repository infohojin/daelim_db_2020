<?php

$daelim = "hello";
echo $daelim; //" 가능
$univ = 'world';
echo $univ;// ' 가능

//밖의 따옴표 출력 x  안에있는 따옴표만 출력
$hi = 'hello "world"...';
echo $hi;

$hi2 = "hello 'world'...";
echo $hi2;


$name = "안녕하세요 \"대림이\" 입니다.";
echo $name;