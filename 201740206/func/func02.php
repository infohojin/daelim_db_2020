<?php
# 인사말1
// echo "안녕하세요 <br>";
// print "대림대학교의 ";
// print "대숙이 입니다." . " <br>";
hello();  // 호출

# 인사말2
// echo "안녕하세요 <br>";
// print "대림대학교의 ";
// print "대숙이 입니다.<br>";
hello();  // 호출

# 인사말3
function hello()    // 선언
{
    echo "안녕하세요 <br>";
    print "대림대학교의 ";
    print "대숙이 입니다.<br>";
    return true;
}
hello();  // 호출