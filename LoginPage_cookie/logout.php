<?php

// 쿠키 삭제
// 1. unset()
// 2. setcookie(이름, 값, time()-1)

setcookie("userid", "kim", time()-1);
?>
<meta http-equiv='refresh' content='0;member_login.html'>