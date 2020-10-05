<?php
# echo __FILE__." : ".__LINE__."<br>";

#1. 함수의 목록
// 함수의 목록을 배열로 반환
// $funcs = get_defined_functions();
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";

// 여기에 있으면?? 없으면??
if(function_exists("hello")){
  echo "hello 함수가 있군요.";
} else{
  echo "hello가 뭐에요???";


  function hello($name="홍예연")
  {
    $text = "";
    $text .= "안녕하세요." . "<br>";
    $text .= "날씨가 참 좋네요." . "<br>";
    $text .= "저는 대림대학교 <b>$name</b> 입니다.<br>";

    return $text;
  }
}
