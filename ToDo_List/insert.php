<?php

include('./db_conn.php');

$user = $_POST['user'];
$pass = $_POST['pass'];
$todo = $_POST['todo'];
$day = date("Y.m.d");

$sql = "insert into todoList(userid, passwd, todo, chk, w_day) values ('$user','$pass','$todo', '미완료','$day')";
mysqli_query($conn, $sql);

echo "<script>alert('To Do List가 입력되었습니다.');</script>";
mysqli_close($conn);

?>

<meta http-equiv="refresh" content="0.5;index.php">