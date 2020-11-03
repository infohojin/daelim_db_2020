<?php

//2개의 단어 연결 스네이크 케이스
//클래스는 카멜케이스로 사용한다

class DaelimUniv
{
    public function hello($name)
    {
        echo $name;
    }
}

$obj = new DaelimUniv;
$obj ->hello("daelim");