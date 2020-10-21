<?php
//게임메시지
$weapon=["knife","gun","hatchet"];
for($i=0; $i<count($weapon);$i++){
    //echo $weapon[$i];
    //영어단어 검사->한글말로 번역 출력
    //조건 제어문 ->조건값==
    /*
    if($weapon[$i]=="knife"){
        echo "칼로공격";
    }else if($weapon[$i]=="gun"){
        echo"총으로 공격";
    }else if($weapon[$i]=="hatchet"){
        echo "손도끼로 공격";
    }
    */
    switch($weapon[$i]){
        case 'knife':
            echo "<b>칼</b>로 공격을 합니다.";
        break;//switch 끝
        case 'gun':
            echo "<b>총</b>으로 공격을 합니다.";
        break;
        case 'hatchet':
            echo "<b>손도끼</b>로 공격을 합니다.";
        break;
    }
    print "<br>";
}
function knife()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다.";
}
function gun()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다.";
}
function hatchet()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼</b>로 공격을 합니다.";
}