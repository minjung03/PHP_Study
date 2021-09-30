<?php
$idx = $_POST['idx'];

$title = $_POST['title'];
$author = $_POST['author'];
$info = $_POST['info'];
$price = $_POST['price'];

include('./db_conn.php');

$sql = "update Book set title = '$title', author = '$author' , price = $price, description = '$info' where id = $idx";
mysqli_query($conn, $sql);
echo "<script>alert('목록 수정이 완료되었습니다.');</script>";

mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0.5;list.php">