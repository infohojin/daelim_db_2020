<?

$name = "대림대학교";
echo$name. "\n"; // $name변수를 출력한것

echo ${"name"}; //중괄호 사이에, 문자열
//안에 있는 문자열과같은 이름을 가지는 변수를 선택해 주세요.
//그 변수의 값을 출력해 주세요.


$daelim = "name";
echo ${$daelim};//$daelim안에 있는 이름과 동일한 변수를
//찾아서 그 변수 안에 있는 값을 출력해 주세요.