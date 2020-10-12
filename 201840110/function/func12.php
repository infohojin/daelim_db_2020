<?php

// 선언
function daelim() 
{
    print __FUNCTION__. "호출합니다. <br>" ;
    echo "대림대학교";
}

function myname()
{
    print __FUNCTION__. "호출합니다. <br>" ;
    echo "김소진 입니다.";
} // 단순한 함수를 선언할때는 세미콜론이 필요 X 


// 호출
$caller = "myname"; // 변수 안에 있는 문자열과 동일한
$caller(); // () => 함수를 찾아서 실행해주세요.

// 변수명 <== 함수명
// 함수의 이름이 없어요
$func = function ()
{
    echo "오늘도 좋은 하루 되세요";
}; // 하나의 명령 문장이기 때문에, 세미콜론이 필요하다. 

// 변수의 저장된 함수를 
// 위의 방식을 이욕하여 호출이 가능

$func();