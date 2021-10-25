<?php
session_start(); // 맨 윗줄에 적기****

// 쿠키, 세션은 서버가 만든다!!! (클라이언트 XX)

//1. 세션 생성 sesstion_start();
//2, 세션 등록  $_SESSION['변수'] = '값'; 
// sesstion 값 설정, userid => kim 설정
$_SESSION["userid"]="kim"; // 빈칸같은거 있으면 XX 따닥따닥 붙이기

?>

<!DOCTYPE html>
<html>
    <head>
        <body>
            <!-- 클라이언트 : 요청하는 애 "브라우저" -->
            <h1>세션 생성!</h1>
            설정한 세션 내용은 <a href="result_session.php">여기로</a>
        </body>
    </head>
</html>