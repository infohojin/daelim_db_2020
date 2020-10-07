<?php


//조건제어문 값은 >논리값
//논리값은 참/거짓
// 참은 0보다 큰값
//거짓은 0또는 null값

//논리값, 논리 연산
// ! 는 not 의미 참 > 거짓 거짓 > 참'

//밑에 느낌표를 넣으면 있다가 없다로 변경
if(!function_exists("html_get_resource")){
    //함수가 있어요


    function html_get_resource($layout , $path="layout.html")
    {

        $filename = "../resource/".$layout."/".$path;
        //echo $filename;
        //리소스파일을 앍어 옵니다.
        //$filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

//echo "함수가 선언되었습니다.";