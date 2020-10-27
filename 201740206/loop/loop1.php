<?php
// echo "안녕하세요" . "<br>";  // 문자열 연산자를 통하여 HTML br 태그를 추가
// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";
// echo "안녕하세요" . "<br>";

$i = 0;
for($j=1, $k="a"; $i<5; $i++,$j++) {
    echo $k++;
    echo $i . " ";
    echo "hello" . "<br>";
}

/* 출력결과
a0 hello
b1 hello
c2 hello
d3 hello
e4 hello
*/