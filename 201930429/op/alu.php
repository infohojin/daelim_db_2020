<?php

    echo "더하기 실습 <hr>";
    $sum = 1 + 2 + 3; //직접 더하기 가능
    echo $sum."<br>";

    $a = 10;
    $sum = $sum + $a; //변수에 대입 더하기
    echo $sum."<br>"; //문자열 결합

    $b = 3.14;
    //$sum 현재 정수
    //$b 실수
    //정수, 실수 -> 값
    $sum = $sum + $b;
    echo $sum."<br>";

    echo "빼기 실습 <hr>";
    echo 10-5, "<br>"; //상수 빼기

    echo "곱셈 실습 <hr>";
    echo 2*3, "<br>";

    echo "증가연산자 실습 <hr>";
    $c = 1;
    echo $c; //1
    $c = $c + 1;
    echo $c; //2
    $c = $c + 1;
    echo $c; //3

    echo "<br>";
    $d = 1;
    echo $d++;
    echo $d++;
    echo $d++;

    echo "<br>";
    $e = 1;
    echo ++$e;
    echo ++$e;
    echo ++$e;

?>