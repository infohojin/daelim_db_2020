<?php

$weapon=["knife","gun","hatchet"];

for($i=0; $i<count($weapon); $i++)
{
    // if($weapon[$i]=="knife")
    // {
    //     echo "<b>칼</b>로 공격을 합니다";
    // }else if ($weapon[$i]=="gun")
    // {
    //     echo"<b>총</b>으로 공격합니다";
    // }
    // else if ($weapon[$i]=="hatchet")
    // {
    //     echo"<b>도끼</b>로 공격합니다";
    // }
    // $weapon[$i];

// switch($weapon[$i])
// {
//     case 'knife':
//         echo "<b>칼</b>로 공격을 합니다";
//     break;

//     case 'gun':
//         echo "<b>총</b>으로 공격합니다";
//     break;

//     case 'hatchet':
//         echo"<b>도끼</b>로 공격합니다";
// }

    $func = $weapon[$i];
    $func();

    print "<br>";
}

//상세패턴 호출 방식

function knife()
{
    echo __FUNCTION__."를 호출합니다";
    echo "<b>칼</b>로 공격을 합니다";
}
function gun()
{
    echo __FUNCTION__."를 호출합니다";
    echo "<b>총</b>으로 공격합니다";
}
function hatchet()
{
    echo __FUNCTION__."를 호출합니다";
     echo"<b>도끼</b>로 공격합니다";
}