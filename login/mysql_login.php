
<?php
// 데이터 추가 : insert 명령문 사용해보기

// 대부분 개발자들이 전부 변수로 주고 사용한다.
$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$uid = $_POST["uid"];
$upass = $_POST["upass"];

// 1. 접속 : mysqli_connect(주소, 아이디, 비빌번호, db이름)
$conn = mysqli_connect($url, $id, $password, $db);
// 변수 이름은 알아서 지정


// 2. query 날리기 : mysqli_query()
$sql = "insert into login(userid, userpass) values('$uid', '$upass')";
mysqli_query($conn, $sql);

echo "데이터가 입력되었습니다.";

// 3. mysql 종료 : mysqli_close()
mysqli_close($conn);
?>




