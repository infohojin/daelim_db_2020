<?php

// "가능
$daelim = "hello";
echo $daelim;

// '가능
$univ = 'world';
echo $univ;

// 밖의 따옴표는 표시X, 안에있는 따옴표만 출력
$hi = "\nhello 'world'...\n";
echo $hi;

$hi2 = 'hello "world"...';
echo $hi2;

$name = "\n안녕하세요 \"대림이\" 입니다";
echo $name;