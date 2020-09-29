<?php

$hello = "안녕";
echo $hello;

// hello 더이상 필요 없음
unset($hello);//메모리가 제거됩니다.

echo $hello;// 삭제하고 없는 hello 호출하니 오류 발생
echo $hello;
//마지막줄 프로그램 종료되면,
//변수가 메모리에서 없어 집니다.