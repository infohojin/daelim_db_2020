<?php
//선언
//0 : 실행안됨
function recursion($n){
    echo "hello".$n;
    echo "<br>";
    
    if($n<5){
        //자기자신
        recursion($n+1); //2: 호출 재실행
        //3: 호출 재실행
        //4: 호출 재실행
        //컴퓨터 다운..
        //?? -> 종료   종료조건 포함시켜야 함
    }
}
recursion(0); //1: 호출실행