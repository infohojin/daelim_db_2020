<?php

$hello = "안녕";
echo $hello;

// hello 너 더이상 필어없어.
// 저리가. 메모리가 부족해...
unset($hello); // 메모리가 제거 됩니다.

echo $hello; // 삭제하고 없는 hello 호출하니깐... 
echo $hello; // 당연히 오류가 발생하죠.
// 마지막줄 프로그램 종료되면, 
// 변수가 메모리에서 없어 집니다.