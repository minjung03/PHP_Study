<?php

// 쿠키, 세션은 서버가 만든다!!! (클라이언트 XX)

//1. 쿠키생성 setcookie(쿠키이름, 쿠키값, 만료시간(초),......) <- 여러가지 들어감 
// (ex : setcookie("userid","kim",60) -> 1분간만 쿠키 유지. 지나면 다시 로그인!)
// 1시간 : 60*60   1일 : 60*60*24
// 하루만 쿠키 유지 : setcookie("userid","kim",time()+60*60*24); - time() 현재시간(?)

// 만료시간 지정이 없다면 브라우저를 닫는 시점까지! (기본적)

//2. 쿠키 출력

$cookie_name = "myCookie";
$cookie_value = "Apply";

setcookie($cookie_name, $cookie_value);
// == $setcookie("myCookie", "Apply");
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!-- 클라이언트 : 요청하는 애, "브라우저" -->
        <h1>쿠키 생성!</h1>
        설정한 쿠키 내용은 <a href="result_cookie.php">여기로</a>
    </body>
</html>