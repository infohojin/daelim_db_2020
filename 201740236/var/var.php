<?php
$name = "대림대학교";
echo $name. "\n"; // $name 변수를 출력

echo ${"name"}; // 중괄호 사이에 문자열
// 안에 있는 문자열과 같은 이름을 가진 변수를 선택
// 그 변수의값을 출력

$daelim = "name";
echo ${$daelim}; //$daelim안에 있는 이름과 동일한 변수를 찾아
// 그 변수 안에 있는 값을 출력