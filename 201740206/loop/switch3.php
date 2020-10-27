<?php
// 게임 메시지
$weapon = ["knife", "gun", "hatchet"];
for($i=0; $i<count($weapon); $i++) {
    // if ($weapon[$i] == "knife") {
    //     echo "<b>칼</b>로 공격을 합니다.";
    // } else if ($weapon[$i] == "gun") {
    //     echo "<b>총</b>으로 공격을 합니다.";
    // } else if ($weapon[$i] == "hatchet") {
    //     echo "<b>손도끼</b>로 공격을 합니다.";
    // }

    // switch($weapon[$i]) {
    //     case 'knife':
    //         echo "<b>칼</b>로 공격을 합니다.";
    //         break;
    //     case 'gun':
    //         echo "<b>총</b>으로 공격을 합니다.";
    //         break;
    //     case 'hatchet':
    //         echo "<b>손도끼</b>로 공격을 합니다.";
    //         break;
    // }

    $func = $weapon[$i];  // 문자열 복사
    $func();  // 문자열과 동일한 함수를 호출(익명함수)

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
    echo "<b>손도끼</b>로 공격을 합니다.";
}
