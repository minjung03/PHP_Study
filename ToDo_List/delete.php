<?php

$passwd = $_POST['passwd'];
$u_pass = $_POST['u_pass'];

include('./db_conn.php');

$sql = "delete from todoList where passwd = $passwd";

if($passwd == $u_pass){
    mysqli_query($conn, $sql);
    echo "<script>alert('삭제가 완료되었습니다');</script>";
    mysqli_close($conn);
}
else {
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
?>

<meta http-equiv="refresh" content="0.5;index.php">