<?php
$i = 0;
for($j=1, $k="a"; $i<5; $i++, $j++)
{
    // 숫자의 표시는 $j를 사용하지만,
    // 실제 반복은 $i로 동작 (조건값)
    echo $k++;
    echo $j . " ";
    echo "hello" . "<br>"; // 문자열 연산자를 통하여 html br태그 추가
}

// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";