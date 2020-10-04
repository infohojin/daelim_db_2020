<?php

//echo __FILE__." : ".__LINE__." <br>";

//함수는 이름 중복해서 선언 불가능
//함수목록 검사해서 이전에 생성낳ㄴ 적이 있으면 제외하고
//없으면 새로 선언해주면 됩니다<div class=""></div>
// $funcs = get_defined_functions();
// echo"<pre>";
// print_r($funcs);
// echo"<pres>";

if(function_exists("hello")) {

    echo "아 hello 함수가 있군요";
}
else{
    //
    echo "hello가 뭔가요";
    //코드블럭 안에서 함수 ㅓㅅㄴ언 가능
function hello($name= "민지황"){
    $text = "";
    $text .= "안녕하세요". "<br>";
    $text .= "날씨가 참 좋네요" . "<br>";
    $text .= "저는 대림대학교 201740238 <b>$name</b> 입니다." . "<br>";

    return $text;
}

}

