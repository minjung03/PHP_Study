<?php
$passwd = $_POST['passwd']; // music db에 저장되어있는 패스워드
$u_pass = $_POST['u_pass']; // 사용자가 입력한 패스워드

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $password, $db);

$sql = "select * from music where song_passwd = $passwd";
$result = mysqli_query($conn, $sql);

$re = mysqli_fetch_row($result);

if($re[5] != $u_pass){
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
else {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            td{
               padding: 5px;
            }
            button{
                color: white;
                background-color: black;
                border: 0;
                padding: 5px;
                width:50px;
            }
            input {
                width :  100px;
            }
        </style>
    </head>

    <body>
        
        <form method="POST" action="update.php?passwd=<?php echo $re[5]?>">
            <table>
                <tr>
                    <td>[순번 <?php echo "$re[0]"?>]</td>
                </tr>
                <tr>  
                    <td>제목 : <input type="text" name="title" value="<?php echo $re[1]?>"></td>
                </tr>
                <tr>
                    <td>가수 : <input type="text" name="singer" value="<?php echo $re[2]?>"></td>
                </tr>
                <tr>
                    <td>장르 : <input type="text" name="genre" value="<?php echo $re[3]?>"></td>
                </tr>
                <tr>
                    <td>가격 : <input type="text" name="price" value="<?php echo $re[4]?>"></td>
                </tr>
                <tr>
                    <td>발매년도 : <input type="text" name="date" value="<?php echo $re[6]?>"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">수정</button>
                    </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php 
}
?>
