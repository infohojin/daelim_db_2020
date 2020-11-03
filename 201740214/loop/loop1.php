<?php

//for($i= 0; $i<5; $i++){
//    echo $i . " " ;
//    echo "hello" . "<br>"; // php에서 .은 문자열 결합(+)
//}

//$i= 0; 가능
//for(; $i<5; $i++){
//    echo $i . " " ;
//    echo "hello" . "<br>"; // php에서 .은 문자열 결합(+)
//}

 $i= 0; //초기값
for($j= 1, $k="a"; $i<5; $i++, $j++){
    echo $k++;
    echo $j . " " ;
    echo "hello" . "<br>"; // php에서 .은 문자열 결합(+)
// -> 숫자의 표시를 $j로 사용하지만 실제 반복은 $i로 동작 (조건값)
}

//echo "안녕하세요" . "<br>";
//echo "안녕하세요" . "<br>";
//echo "안녕하세요" . "<br>";
//echo "안녕하세요" . "<br>";

//php -S localhost:8000 -t ./201740214/ 
    // localhost:8000/loop/lopp1.php