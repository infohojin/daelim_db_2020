<?php

$name = "대림대학교";
echo $name."\n";

echo ${"name"};
//안에 있는 문자열과 같은 이름을 가지는 변수를 선택해달라
//그 변수와 값을 출력하라



$daelim = "name";
echo ${$daelim};