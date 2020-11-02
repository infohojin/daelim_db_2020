<?php





// 함수들의 집합체 , 꾸러미
//클래스


class message{
    
    
    
    
    protected $name;
    
    public function hello($name){

        echo $name;
    }
    
    private function daelim($num){
    
        echo $num;
    }

}

// 선언 -> 호출
// 서언 -> 생성(인스턴스화) -> 호출(메세지 전송)

$obj = new message; // 클래스 객체 생성

// 호출(메세지 전송)

$obj->hello("클래스 대림대학교");