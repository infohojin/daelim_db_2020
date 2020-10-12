<?php
//게임메시지
//배열로 3개의 무기 준비
$weapon = ["knife","gun","hatchet"];

//무기 목록 출력
for($i=0;$i<count($weapon);$i++){ //count: 배열의 개수
    #echo $weapon[$i];
    //영어단어 검사 => 한글말로 번역
    //조건 제어문 => 조건값 ==

    /*
    if($weapon[$i]=="knife"){
        echo "<b>칼</b>로 공격을 합니다";
    } else if($weapon[$i]=="gun"){
        echo "<b>총</b>으로 공격을 합니다";
    } else if($weapon[$i]=="hatchet"){
        echo "<b>손도끼</b>로 공격을 합니다";
    }
    */
    //장점 : switch문은 if보다 조건 분기가 간단하고 빠름
    //단점 : ==만 검사할 수 있음
    /*
    switch($weapon[$i]){
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
    $func = $weapon[$i]; //문자열 복사
    $func(); //문자열과 동일함. 함수 호출(익명함수)
    print "<br>";
}

//상태 패턴 호출방식
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