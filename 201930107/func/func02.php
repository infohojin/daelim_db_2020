<?php
// // 인사말1
// // 반복됨
// echo '안녕하세요.<br>';
// print '대림대학교의 ';
// print '~입니다.' . '<br>';
// 함수는 선언 -> 실행 2단계
hello(); // 함수명();

// // 인사말2
// // 반복됨
// echo '안녕하세요.<br>';
// print '대림대학교의 ';
// print '~입니다.<br>';
hello();

// 인사말3
// 반복됨
function hello() {
    // 들여쓰기 -> tab
    // 코딩 컨벤셜 (스페이스 4칸)
    echo '안녕하세요.<br>';
    print '대림대학교의 ';
    print '~입니다.<br>';
    return true;
}