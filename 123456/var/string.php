<?php

// " 가능
$daelim = "hello";
echo $daelim;

// ' 가능
$univ = 'world';
echo $univ;

// 밖의 따옴표는 표시x, 안에있는 따옴표만 출력
$hi = "hello 'world'... ";
echo $hi;

$hi2 = 'hello "world"... ';
echo $hi2;

$name = "안녕하세요 \"대림이\" 입니다.";
echo $name;

// $name = "안녕하세요';