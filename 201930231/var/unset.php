<?php
$hello = "안녕";
echo $hello;
// hello 더 이상 필요없음
// 메모리가 부족해서ㅠㅠ
unset($hello); // 메모리가 제거됨

echo $hello; // 삭제하고 없는 hello를 호출해서
echo $hello; // 당연히 오류가 발생함
// 마지막줄 프로그램이 종료되면, 
// 변수가 메모리에서 없어짐