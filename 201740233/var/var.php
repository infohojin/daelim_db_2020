<?php

$name = "대림대학교";
echo $name."\n"; // name 변수를 출력

echo ${"name"}."\n"; // 대림대학교
// 중괄호 안에 있는 문자열과 같은 이름을 가지는 변수를 선택해 주세요.
// 그 변수의 값을 출력해 주세요.

$dalim = "name";
echo ${$dalim}; // 대림대학교
