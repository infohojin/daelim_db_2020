<?php
// 게임
// 배열로 3개의 무기 분비
$weapon = ["knife", "gun", "hatchet"];

foreach($weapon as $w){
    #echo $w;
    // 영어로 된 단어
    // 한글로 메시지로 출력 변환
    /*
    switch($w){
        case 'knife':
            echo "<b>칼</b>로 공격을 합니다.";
            break;
        case 'gun':
            echo "<b>총</b>으로 공격을 합니다.";
            break;
        case 'hatchet':
            echo "<b>손도끼</b>로 공격을 합니다.";
            break;
    }
    */
    $w(); //가변함수를 이용하여 호출...// 상대패턴 호출
    print "<br>"; //브라우저 다음줄...
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