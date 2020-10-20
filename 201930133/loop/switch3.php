<?php
    // 게임 메세지
    $weapon = ["knife","gun","hatchet"];

    // 배열 목록 출력
    for($i=0; $i<count($weapon); $i++){
        // echo $weapon[$i];

        // 영어단어 검사 => 한국어로 번역해서 출력
        //  =  조건 제어문
        // if($weapon[$i] == "knife"){
        //     echo "<b>칼</b>로 공격합니다.";
        // } elseif($weapon[$i] == "gun"){
        //     echo "<b>총</b>으로 공격합니다.";
        // } elseif($weapon[$i] == "hatchet"){
        //     echo "<b>손도끼</b>로 공격합니다.";
        // }

        // switch($weapon[$i]){
        //     case 'knife':
        //         echo "<b>칼2</b>로 공격합니다.";
        //     break;
        //     case 'gun':
        //         echo "<b>총2</b>으로 공격합니다.";
        //     break;
        //     case 'hatchet':
        //         echo "<b>손도끼2</b>로 공격합니다.";
        //     break;
        // }


        $func =$weapon[$i];
        $func();

        print "<br>";
    }

    function knife(){
        echo __FUNCTION__."를 호출합니다.";
        echo "<b>칼3</b>로 공격합니다.";
    }
    function gun(){
        echo __FUNCTION__."를 호출합니다.";
        echo "<b>총3</b>로 공격합니다.";
    }
    function hatchet(){
        echo __FUNCTION__."를 호출합니다.";
        echo "<b>손도끼3</b>로 공격합니다.";
    }