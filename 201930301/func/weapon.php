<?php
$weapon = ['knife','gun','hatchet'];

foreach($weapon as $w){
    //영어로 된 단어를 한글로 출력 변환
    /*
    switch($w){
        case "knife":
            echo "<b>칼</b>로 공격을 합니다";
            break; //switch 끝남
        case "gun":
            echo "<b>총</b>으로 공격을 합니다";
            break; //switch 끝남
        case "hatchet":
            echo "<b>손도끼</b>로 공격을 합니다";
            break; //switch 끝남
    }
    */
    $w(); //가변함수를 이용하여 호출 -> 상태패턴 호출방식
    print "<br>";
}

function knife(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다";
}
function gun(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다";
}
function hatchet(){
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>손도끼</b>로 공격을 합니다";
}