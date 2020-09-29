<?php

$hello = "안녕";
echo $hello;

// hello 너 더이상 필요없어
// 저리가, 메모리가 부족해...
unset($hello); //메모리가 제거됩니다.


// echo $hello; 삭제하고 없는 hello를 호출하니깐 당연히 오류가 발생
echo $hello;
// 마지막을 프로그램 종료되면, 변수가 메모리에서 사라집니다