<?php
// 데이터 삭제 : delete 명령문 사용해보기 

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

// mysql 접속
$conn = mysqli_connect($url, $id, $password, $db);
$sql = "delete from login where id = 8";

// query 함수 사용해 명령문 날리기
mysqli_query($conn, $sql);
echo "데이터 삭제가 완료되었습니다.";

// mysql 종료
mysqli_close($conn);

?>