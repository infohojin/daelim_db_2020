<?php
//익명함수
//선언
function daelim(){
    print __FUNCTION__."호출입니다<br>";
    echo "대림대학교";
}
function myname(){
    print __FUNCTION__."호출입니다.<br>";
    echo "김서연입니다.";
}//단순한 함수 선언 시 세미콜론 필요 x

//직접 이름을 이용해 호출 가능
//변수를 통한 간접 호출 가능

//호출
$caller = "daelim";
$caller(); 
//변수명 안에 있는 문자열과 동일한
//()-> 함수를 찾아서 실행함

//변수명<-함수명
//함수에 이름이 없음 -> 익명 함수
$func = function(){
    echo "오늘도 좋은 하루 되세요.";
};

//변수에 저장된 함수를
//위의 방식을 이용하셔 호출이 가능
$func();