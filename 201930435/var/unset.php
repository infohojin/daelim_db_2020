<?php

$hello = "안녕";
echo $hello;

unset($hello); // 메모리가 제거됨

echo $hello; // 삭제하고 없는 hello
echo $hello; // 삭제하고 없는 hello
// 마지막줄 프로그램 종료되면, 변수가 메모리에서 없어짐