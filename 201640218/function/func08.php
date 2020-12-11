<?php
//함수 선언
function daelim($num) {
    // 외부의 전역변수를 사용하기 위해서 -> global 키워드 사용
    global $name;
   
    // echo $name . "대학교" . $num;
    
    $name .= $num;
    echo $name . "대학교";
    print "<hr>";
}
$name = "daelim"; 

//함수 호출
for ($i=0; $i<5; $i++){
    daelim($i);
}
echo $name . "을 5번 출력 하였습니다.";