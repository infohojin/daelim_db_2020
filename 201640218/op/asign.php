<?php
$hello = "안녕하세요"; //대입
echo $hello;

$hi = &$hello;
echo $hi;

$hi = "hello";
echo $hi;