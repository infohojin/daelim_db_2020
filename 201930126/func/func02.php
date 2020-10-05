<?php
hello();

hello();

#인사말3
function hello()
{
    //들여쓰기는 탭키사용 4칸을 띄운다 Psr규격으로
    //함수는 실행을 위해 호출이라는 과정이필요하며 함수명()으로 호출가능    
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print "대숙이입니다<br>";
    return true;
}
