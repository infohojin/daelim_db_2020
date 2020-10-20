<?php
function daelim() 
{
    print __FUNCTION__ . "호출합니다. <br>";
    echo "대림대학교";
}

function myName()
{
    print __FUNCTION__ . "호출합니다. <br>";
    echo "남궁찬";
}

// 호출
$caller = "myName";
$caller();

// 함수에 이름 없음
$func = function()
{
    echo "익명함수";
}; // ;필요

echo "<br>";
$func();