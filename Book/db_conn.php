<?php
// mysql database 접속 정보 및 연결 설정

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $password, $db);

// 공통으로 들어가는 부분이 많으니 따로 빼준 뒤, 파일을 가져다 사용
?>