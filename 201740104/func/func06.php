<?php

 # 함수의 선언은 호출 전/후 모두 위치 할수 있다.. 


 if (function_exists("hello")) {
    echo "hello 함수가 존재하네요.";

} else {
    //echo "hello 함수가 뭐에요? 처음 들었어요.";
    echo "hello 함수가 뭐에요? 처음 들었어요.<br>";
    function hello($name)
    {
        echo "안녕하세요.<br>";
        print "대림대학교의 ";
        print $name . " 입니다.<br>";
        return true;
    }


}

hello("홍길동");


