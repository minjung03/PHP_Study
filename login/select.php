<?php

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

// mysql 접속
$conn = mysqli_connect($url, $id, $password, $db);
$sql = "select * from login";

// 쿼리 날리기
$result = mysqli_query($conn, $sql); 
// 결과값이 있어서 '결과값을 저장할 변수'를 꼭 지정해줘야 함
// result에는 테이블 형태(2차원 배열) 그대로 들어가 있다. 
// 여기서 한 줄씩 가져오는게 mysqli_fetch_row(), mysqli_fetch_array() 이다.

$value = mysqli_fetch_row($result);
echo "아이디 : ".$value[1]."</br>";
echo "비밀번호 : ".$value[2];


?>