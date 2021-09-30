<?php
$idx = $_POST['idx'];
$id = $_POST['id'];
$pass = $_POST['pass'];

if($id == "admin" && $pass == "admin"){ 

include('./db_conn.php');

$sql = "select * from Book where id = $idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/update_form.css?after">
    </head>

    <body>
        
        <form method="POST" action="update.php">

        <h3><?php echo $idx?></h3>
            <table>
                <tr>  
                    <input type="hidden" name ="idx" value="<?php echo $idx ?>">
                    <!-- value 초기값 지정 -->
                    <td>제목 : <input type="text" name="title" value="<?php echo $re[1]?>"></td>
                </tr>
                <tr>
                    <td>저자 : <input type="text" name="author" value="<?php echo $re[2]?>"></td>
                </tr>
                <tr>
                    <td>정보 : <input type="text" name="info" value="<?php echo $re[5]?>"></td>
                </tr>
                <tr>
                    <td>가격 : <input type="text" name="price" value="<?php echo $re[3]?>"></td>
                </tr>
                <tr>
                    <td><button type="submit">수정완료</button></td>
                </tr>
            </table>
        </form>    

    </body>
</html>

<?php
}
else echo "<script>alert('아이디/비밀번호 오류')</script>";
?>