<?php
hello("대남이");

hello("대숙이");

#인사말3
function hello($name)
{
    //들여쓰기는 탭키사용 4칸을 띄운다 Psr규격으로
    //함수는 실행을 위해 호출이라는 과정이필요하며 함수명()으로 호출가능    
    //$name 변수내에 생성된다
    //함수에서받는 변수는 매개변수
    //함수호출시 전달하는 값을 인자값이라한다
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . "입니다<br>";
    return true;
}
