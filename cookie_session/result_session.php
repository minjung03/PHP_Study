<?php
session_start(); // 세션을 사용하는 곳은 무조건 쓰기***

//3. 세션 출력
echo "설정한 세션은 ".$_SESSION['userid']."입니다";
?>