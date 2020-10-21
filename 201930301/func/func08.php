<?php
//함수의 선언부
function daelim($num){
    //외부에 전역변수를 사용하기 위해서는 global키워드 사용
    global $name;
    //지역변수
    //$name = "대림"; 
    #echo $name."대학교".$num;
    $name .= $num;
    echo $name."대학교";
    print"<hr>";
}
//전역변수
$name = "daelim";
for($i=0;$i<5;$i++){
    //함수의 호출부
    daelim($i);
}

echo $name."을 5번 출력 하였습니다.";