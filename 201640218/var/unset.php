<?php
$hello = "안녕";
echo $hello;
// hello 한번 출력 더이상 필요X 면
unset($hello); // unset() 로 인해 메모리 제거
echo $hello;
echo $hello;
// 마지막줄 프로그램 종료되면, 변수가 메모리에서 없어짐