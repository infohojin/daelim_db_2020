<?php

$weapon = ["knife","gun","hatchet"];

for($i=0; $i<count($weapon);$i++){
   # echo $weapon[$i];
    // if($weapon[$i] == "knife"){
    //     echo "<b>칼</b>로 공격합니다";
    // }else if($weapon[$i] == "gun"){
    //     echo "<b>총</b>으로 공격합니다";
    // }else if($weapon[$i] == "hatchet"){
    //     echo "<b>손도끼</b>로 공격합니다";
    // }
    // print "<br>";

    // switch($weapon[$i]){
    //     case 'knife':
    //         echo "<b>칼</b>로 공격합니다";
    //         break;
    //     case 'gun':
    //         echo "<b>총</b>으로 공격합니다";
    //         break;
    //     case 'hatchet':
    //         echo "<b>손도끼</b>로 공격합니다";
    //          break;
    // }
    $func = $weapon[$i];
    $func();
     print "<br>";
}
function knife(){
    echo __FUNCTION__."를 호출합니다. ";
    echo "<b>칼</b>로 공격합니다";
}
function gun(){
    echo __FUNCTION__."를 호출합니다. ";
    echo "<b>총</b>으로 공격합니다";
}
function hatchet(){
    echo __FUNCTION__."를 호출합니다. ";
    echo "<b>손도끼</b>로 공격합니다";
}
