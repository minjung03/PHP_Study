<?php

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$title = $_POST['title'];
$singer = $_POST['singer'];
$genre = $_POST['genre'];
$price = $_POST['price'];
$date = $_POST['date'];
$pass = $_POST['pass'];

$conn = mysqli_connect($url, $id, $password, $db);

$sql = "insert into music (song_title, song_singer, song_genre, song_price, 
song_passwd, song_date) values('$title', '$singer', '$genre', $price,'$pass', '$date')";
mysqli_query($conn, $sql);

echo "<script>alert('데이터가 입력되었습니다. 목록으로 돌아갑니다.');</script>";
mysqli_close($conn);
?> 
<meta http-equiv="refresh" content="1;index.html">