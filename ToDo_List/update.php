<?php
$passwd = $_GET['passwd'];

$user = $_POST['user'];
$todo = $_POST['todo'];
$pass = $_POST['pass'];
$complete = $_POST['complete'];

include('./db_conn.php');

$sql = "update todoList set userid = '$user', passwd = '$pass', todo = '$todo' , chk = '$complete' where passwd = $passwd";

mysqli_query($conn, $sql);
echo "<script>alert('수정이 완료되었습니다.');</script>";

?>
<meta http-equiv="refresh" content="0.5;index.php">