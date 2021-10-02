<?php
$passwd = $_GET['passwd'];

$title = $_POST['title'];
$singer = $_POST['singer'];
$genre = $_POST['genre'];
$price = $_POST['price'];
$date = $_POST['date'];

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $password, $db);

$sql = "update music set song_title = '$title', song_singer = '$singer' , song_genre = '$genre', song_price = $price, song_date = '$date' where song_passwd = $passwd";

mysqli_query($conn, $sql);
echo "<script>alert('수정이 완료되었습니다. 목록으로 돌아갑니다.');</script>";

?>
<meta http-equiv="refresh" content="1;list.php">