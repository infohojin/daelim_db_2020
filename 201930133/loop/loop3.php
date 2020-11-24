<?php
    // $msg = "abcde";
    // echo $msg;

    $fruit = ['apple'=>"사과",'corn'=>"옥수수",'strawberry'=>"딸기"];
    // $fruit 에 있는 요소를 $value에 하나씩 대입해서 반복문 동작.
    foreach($fruit as $key => $value){
        echo $key."=>";
        echo $value;
        print "<br>";
    }