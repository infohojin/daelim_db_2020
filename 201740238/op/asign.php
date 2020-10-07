<?php
$hello = "안녕하세요";
echo $hello;

$hi = &$hello;
echo $hi;


$hi = "hello";
echo $hello;