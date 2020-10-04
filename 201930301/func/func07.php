<?php
# 함수의 선언은 호출 전/후 모두 위치 할 수 있다.
//hello 함수가 있나요?
if(function_exists("hello")){
    echo "hello 함수가 존재하네요<br>";
} else{
    echo "hello 함수가 뭐에요? 처음 들었어요<br>";

    //조건 제어문의 코드블럭 안에서도 함수를 선언할 수 있다.
    function hello($name="123456") 
    {
        // $name 변수 함수 내에 생성
        echo "안녕하세요.<br>";
        print "대림대학교의 ";
        print $name." 입니다.<br>";
        return true;
    };
    //함수 목록 hello 추가
}
//함수 호출
hello(); 
hello("홍길동"); 
hello("홍길동"); 