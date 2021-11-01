<?php

if(!(isset($_COOKIE['userid']))){ // 쿠키가 없을 때
    // isset : "변수"가 설정되어 있는지 확인하는 php 함수!!
    // 자주 사용한다.
    echo "<meta http-equiv='refresh' content='0;member_login.html'>";
}
else {
    $id = $_COOKIE['userid'];
    echo "안녕하세요. ".$id."님 환영합니다!</br>";
    // echo "설정한 쿠키는 ".$_COOKIE['userid']."입니다";
    echo "<a href='logout.php'>로그아웃</a>";
}

?>
