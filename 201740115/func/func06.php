<?php




//검사.. > 결과를 논리값
//if(!!)else~
if(function_exists("hello")){
   echo "hello 함수가 존재합니다.";
}else{
   echo "hello 함수가 뭐에요?.<br>";
  function hello($name)
//함수내에서 받는 변수 매개변수
{ 

    // $name 변수 함수 내에 생성됩니다
    echo "안녕하세요.<br>"; 
    print "대림대학교의 ";
    print  $name." 입니다. "."<br>";
    return true;
}
}

hello("문병찬");