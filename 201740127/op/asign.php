<?php
$hello = "안녕하세요"; //대입
echo $hello; // 첫번째 출력

$hi = &$hello;
echo $hi; // 두번째 출력

$hi = "hello";
echo $hi; // 세번째 출력