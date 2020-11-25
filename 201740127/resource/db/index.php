<?php

echo "대림대학교";

// 객체 생성
$db = new mysqli(
    "localhost", // mysql 서버주소
    "daelim4", // 사용자아이디
    "123456", // 패스워드
    "phpdaelim4" // 스키마
);

if ($db) {
    echo "DB 접속 성공"."<br>";
} else {
    echo "접속실패";
}