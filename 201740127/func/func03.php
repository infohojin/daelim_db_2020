<?php
// 함수의 실행은 함수명();

hello("안그냐?");

hello("안그냐?");

function hello($som)
{
    echo "아~" . "<br>";
    print "춥다" . "<br>";
    echo "낮엔 덥던데 <b>$som</b> <br>";

    return true;
}

// 함수의 선언, 단지 코드를 묶는 선언일뿐 실행은 안 됨