<?php

$weapon = ["knife", "gun", "hatchet"];

for ($i = 0; $i < count($weapon); $i++) {
    #echo $weapon[$i];
    // if ($weapon[$i] === "knife") {
    //     echo "<b>칼</b>로 공격을 합니다.";
    // } else if ($weapon[$i] === "gun") {
    //     echo "<b>총</b>으로 공격을 합니다.";
    // } else {
    //     echo "<b>도끼</b>로 공격을 합니다.";
    // }


    // 장점: if문보다 조건 분기가 간단하고 빠르다.
    // 단점: == 만 검사할 수 있다.

    // switch ($weapon[$i]) {
    //     case 'knife' :
    //         echo "<b>칼</b>로 공격을 합니다.";
    //         break;
    //     case 'gun' :
    //         echo "<b>총</b>으로 공격을 합니다.";
    //         break;     
    //     case 'hatchet' :
    //         echo "<b>도끼</b>로 공격을 합니다.";
    //         break;
    // }

    $func = $weapon[$i];
    $func();

    print "<br>";
}

// 상태패턴 호출방식
function knife() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>칼</b>로 공격을 합니다.";
}

function gun() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>총</b>으로 공격을 합니다.";
}

function hatchet() {
    echo __FUNCTION__."를 호출합니다.";
    echo "<b>도끼</b>로 공격을 합니다.";
}