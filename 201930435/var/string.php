<?php

$hello = "안녕하세요"; // 문자열 " 묶을 수 있고
echo $hello; 

$world = '반갑습니다.'; // ' 묶을 수 있다
echo $world;

$aaa = "안녕하세요 '반갑습니다'...";
echo $aaa; // 바깥쪽 따옴표는 제외하고, 내부의 것만 출력됨

$bbb = '반가워요, "좋은하루" 입니다.';
echo $bbb;

$ccc = "오늘도 \"화창한\" 날 이네요";
echo $ccc;