<?php
#인사말1

// 함수 호출시 전달되는 값  = 인자값
hello("머남이"); // 함수

// 함수 매개변수 $name = "머남이";


#인사말2
hello("머숙이"); // 함수


//함수 선언
// 소괄호()와 출력 return
// 입력(), 여러개 값 전달
// 출력은 return
function hello($name)
//매개변수 $name
{
echo "안녕하세요. <br>"; // BR태그로 다음줄 전송
 print "머림머학교의";
  print $name. "입니다. <BR>"; 
    return true;
}