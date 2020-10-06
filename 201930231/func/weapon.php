<?php
// 배열로 3개의 무기 준비
$weapon = ["knife", "gun", "hatchet"];

foreach ($weapon as $w) {
    # echo $w;
    /*switch($w) {
        case 'knife' :
            echo "<b>칼</b>로 공격을 합니다.";
        break;
        case 'gun' :
            echo "<b>총</b>으로 공격을 합니다.";
        break;
        case 'hatchet' :
            echo "<b>손도끼</b>로 공격을 합니다.";
        break;
    }*/
    $w();  // 가변함수를 이용하여 호출...  // 상대 패턴 호출 방식
    print "<br>";  // 브라우저 다음 줄로 이동
}

function knife()
{
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다.";
}

function gun()
{
    echo __FUNCTION__."을 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다.";
}

function hatchet()
{
    echo __FUNCTION__."을 호출합니다.";
    echo "<b>손도끼</b>로 공격을 합니다.";
}