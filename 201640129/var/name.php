<?php

//변수는 무조건 $기호가 있어야함
$hi = "반가워요";

//변수명 뒤에는 숫자가 가능
//하지만, 숫자로 시작되는 것은 안됨
$hi123 = "hi";

//기호로 시작이 안됨
//하지만 _은 가능

$_hi = 123;

$hello_world = "hi"; //스네이크 케이스

//대소문자 구별

$name = "안녕";
$NAME = "반가워";
echo $name;
echo $NAME;

$helloWorld = 111; //카멜케이스
$helloworld = 222;

//utf-8
$한글 = "세종대왕";
echo $한글;
