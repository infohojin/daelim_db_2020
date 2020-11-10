<?php
// 10/06 오후수업 시작
function daelim()
{
    print __FUNCTION__."호출입니다 <br>";
    echo "대림대학교";
}
function myname()
{
    print __FUNCTION__."호출입니다 <br>";
    echo "이태정 입니다";
}

//함수는 이름으로 직접 호출할수있고
//아래와같이 간접적으로 호출이 가능하다

$caller = "myname";
$caller();


$func = function()
{
    echo "오늘도 좋은 하루되세요";
};

$func();