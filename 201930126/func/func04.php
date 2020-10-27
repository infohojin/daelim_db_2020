<?php
hello("대남이");

hello("대숙이");


    //들여쓰기는 탭키사용 4칸을 띄운다 Psr규격으로
    //함수는 실행을 위해 호출이라는 과정이필요하며 함수명()으로 호출가능    
    //$name 변수내에 생성된다
    //함수에서받는 변수는 매개변수
    //함수호출시 전달하는 값을 인자값이라한다
    //함수이름은 중복불가능
    //함수선언시 함수의목록을 검사해서 중복여부를 체크
    //서버실행 오류방지
    //목록,존재하는지에대해 검사
    #목록, 내장함수
    /*
    $funcs = get_defined_functions();  //목록을 배열로저장
    echo"<pre>";
    print_r($funcs);
    echo"</pre>";
    */

    /*if(조건-논리값)성공
    if(조건)성공-조건값 존재한다 else실패 조건값이없다
    if() {}
    if() {} else{}
    */
    if(function_exists("hello"))
    {
        echo"hello 함수가 존재한다";
    }else
    {
        echo"hello 함수가 없다";
    }

    
#인사말3
function hello($name)
{
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . "입니다<br>";
    return true;
}
