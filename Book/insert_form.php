<?php 
$id = $_POST['id'];
$pass = $_POST['pass'];

if($id == "admin" && $pass == "admin"){ 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/insert_form.css?after">
    </head>
    <body>

         <form method="POST" action="insert.php" enctype="multipart/form-data">
            <h2>목록 추가</h2>
            <table>
                <tr>
                    <td>제목 : <input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>저자 : <input type="text" name="author"></td>
                </tr>                            
                <tr>
                    <td>정보 : <input type="text" name="info" value="출판사 | 출시일"></td>
                </tr>
                <tr>
                    <td>가격 : <input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>이미지 : <input type="file" name="files"></td>
                </tr>   
                <tr>
                    <td><button type="submit">입력완료</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
}
else echo "<script>alert('아이디/비밀번호 오류')</script>";
?>

