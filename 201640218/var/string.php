<?php

$hello = "안녕하세요"; // 문자열 " 묶을 수 있고
echo $hello;

$world = '반갑습니다.'; // ' 묶을 수 있다.  구분X
echo $world;

$aaa = "안녕하세요 '반갑습니다'...";
echo $aaa; // 바깥 따옴표 제외, 내부의 것만 출력

$bbb = '안녕 "좋은하루"...';
echo $bbb; 


$ccc = "하이 \"바이\"..."; // \ 이스케이프 문자 사용
echo $ccc; 