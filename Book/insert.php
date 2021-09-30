<?php

$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$info = $_POST['info'];

// 디비 접속 파일(db_conn.php)을 불러오기
include('./db_conn.php'); // 앞으로는 이런 식으로 접속시키기

$uploads_dir = 'uploads/';
$upload_file = $uploads_dir.basename($_FILES['files']['name']);

if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_file)){
    $sql = "insert into Book(title, author, price, img, description) values('$title', '$author', $price, '$upload_file', '$info')" ;
    mysqli_query($conn, $sql);
    echo "<script>alert('목록이 추가되었습니다.');</script>";
}
else echo "<script>alert('목록 추가가 실패하였습니다.');</script>";

mysqli_close($conn);
?>

<meta http-equiv="refresh" content="0.5;list.php">

