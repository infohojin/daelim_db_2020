<?php
    //echo"대림대";
namespace daelim\mobile;
    class daelimUniv 
{
    function hello($name)

    {
        echo $name;
    }
  //클래스  안에있는 변수는 프로퍼티
  //클래스 안에있는 함수는 메소드
  //생성 -> 인스턴스 화 
    function hi($name)
    {
        echo $name;
    }
 }
//클래스= 함수 + 변수
//     $name = "univ";
//     hello("대림대학교");
//     hello("daelim");
$obj = new \daelim\mobile\daelimUniv;

$obj->hello("대림대학교111111111");
