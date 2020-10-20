<?php

$age = 10;
//지하철요금표
//일반1250
//청소년720
// 어린이 450
// 노인 무료


if($age >=65){
    $fee = 0;

}else{ if($age <= 19){
        $fee = 720;
    }else {if($age <=9){
            $fee = 450;
        }else{
            $fee = 1250;
        }
    }
    }

echo $age."살의 지하철 가격은 ".$fee."원 입니다.";