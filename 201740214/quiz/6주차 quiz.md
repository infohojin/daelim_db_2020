1. 다음 소스의 실행 결과를 쓰시오.
function hello($name)
{ 

    print "저는" .$name . " 입니다<br>";
    return true;
}
hello(박웅서);

답 : 저는 박웅서 입니다.
해설 : 매개변수와 인자

2. 다음 소스의 실행 결과를 쓰시오.
function hello($name="1234546")
{ 
    echo "안녕하세요.<br>";
    print "대림대학교의";
    print $name . " 입니다<br>";
    return true;
}


hello();

답 : 안녕하세요 대림대학교의 123456 입니다
해설 : 매개변수 대입

3. php에서 기본 웹 페이지를 바꿀수 있게 해주는 php 파일은?

답 : index.php
해설 : index.php를 이용하면 php의 기본 페이지를 바꿀수 있다.