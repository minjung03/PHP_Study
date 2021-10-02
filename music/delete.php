<?php
$passwd = $_POST['passwd'];
$u_pass = $_POST['u_pass'];

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$sql = "delete from music where song_passwd = $passwd";

$conn = mysqli_connect($url, $id, $password, $db);

if($u_pass != $passwd){
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
else{
    mysqli_query($conn, $sql);
    echo "<script>alert('삭제가 완료되었습니다. 목록으로 돌아갑니다.');</script>";

    mysqli_close($conn);
}
?>
<meta http-equiv="refresh" content="1;list.php">