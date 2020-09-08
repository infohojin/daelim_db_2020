# 대림대학교 DB프로그래밍
---

## 0. 포크 및 클론(준비작업)

* https://github.com/infohojin/daelim_db_2020 주소로 접근.
메인 저장소를 `포크` 합니다.

* 폴더를 하나 생성
```
mkdir daelim_db_2020
cd daelim_db_2020
```

* 저장소 복제
자기 아이디꺼 복사
```
git clone https://github.com/자기아이디/daelim_db_2020.git .
```

* 자기학번 폴더 생성
```
mkdir 학번번호
```
모든 작업은 `꼭` 자기학번 폴더에서만 합니다. 다른 친구 폴더 건들지 마세요~~~

```
cd 학번번호
```

자기이름.md 파일을 생성합니다.

```
cd ..  <= root 폴더
git add .
git commit -m "자기이름-xxxx"
git push -u origin master
```

* 풀리퀘스트 전송


## 1. 본 저장소 포크

포크한 자신 저장소를 복제

git clone https://github.com/자기아이디/daelim_db_2020.git

원본 저장소 등록
```
git remote add src https://github.com/infohojin/daelim_db_2020.git
```

## 2. 원본 저장소 가지고 와서 병합하기

```
git fetch src
git merge src/master
```

## 코드 작성 및 올리기
---

```
git add .
git commit -m "메시지 작성"
git push -u origin master
```

## 병합 요청하기
---
작업후 포크 저장소로 push, pullrequest 요청


