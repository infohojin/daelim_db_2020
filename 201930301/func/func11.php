<?php
//c언어 -> 반환값 함수명(인자값)
//php -> 인자값 () 소괄호 안에 선언
//반환 받는 타입 함수명 뒤에 선언
function myname($info) : string{
    //배열로 연산을 수행
    return $info['first'].$info['last'];
}
//함수 매개변수의 의존성 해결
$my = myname(['first'=>'kim','last'=>'seoyeon']);
echo "<hr>";
echo $my;