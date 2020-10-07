<?php
// # 인사말1
// echo "안녕하세요<br>";
// print "대림대학교의 ";
// print "이영찬 입니다.<br>";
hello();

// # 인사말2
// echo "안녕하세요<br>";
// print "대림대학교 ";
// print "이영찬 입니다.<br>";
hello();

//function 키워드를 이용해서, 코드를 묶는 것을 함수의 선언이라고 함
//선언된 함수는 선언일뿐 실행은 되지 않는다.
//함수를 실행하기 위해 호출이 필요.
// 함수는 선언과 실행 2단계가 필요하다.
function hello() {
    echo "안녕하세요<br>";
    print "대림대학교 ";
    print "이영찬 입니다.<br>";
    return true;
};

