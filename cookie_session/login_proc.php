<?php
// sesstion_start();

$userid = $_POST['userid'];
$userpasswd = $_POST['userpasswd'];

//$_SESSION["userid"]="kim";
//$_SESSION["userpw"]="1111";

if($userid != "kim" || $userpasswd != "1111"){
   echo "<script>alert('아이디나 비밀번호가 일치하지 않습니다.');history.go(-1)</script>";
}
else {
   $cookie_name = "userid";
   $cookie_value = "kim";

   setcookie($cookie_name,  $cookie_value, time()+60*60);
   // 1시간만 쿠키 유효   
   echo "<script>alert('로그인 되었습니다');</script>";
   echo "<meta http-equiv='refresh' content='0.5;index.php'>";
   //echo "쿠키 설정됨";
}
?>
