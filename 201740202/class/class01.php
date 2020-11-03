<?php


class message{
  //이름
    function hello($name) {
        echo $name;
        }
   //학번     
        function daelim($num){
            echo $num;
        
        }

}
//선언 > 호출 =2단계
//선언 >생성 > 호출  3단계

$obj = new message;

$obj ->hello("대림대학교");


