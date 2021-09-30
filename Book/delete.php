<?php 
$id = $_POST['id'];
$pass = $_POST['pass'];
$idx = $_POST['idx'];

if($id == "admin" && $pass == "admin"){ 

    include('./db_conn.php');

    $sql = "delete from Book where id = $idx";
    mysqli_query($conn, $sql);

    echo "<script>alert('데이터 삭제가 완료되었습니다.');</script>";
    mysqli_close($conn);

}
else {
    echo "<script>alert('아이디/비밀번호 오류')</script>";
}
?>

<meta http-equiv="refresh" content="0.5;list.php">
<!-- 많이 쓴다 meta 태그 / content="몇 초뒤; 어디로 이동시켜라">
