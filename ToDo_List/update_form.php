<?php

$passwd = $_POST['passwd'];
$u_pass = $_POST['u_pass'];

include('./db_conn.php');

$sql = "select * from todoList where passwd = $passwd";
$result = mysqli_query($conn, $sql);

$re = mysqli_fetch_row($result);

if($re[2] != $u_pass){
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
else {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            table {
                margin : auto;
            }
            form {
                text-align: center;
            }
            td {
                padding : 4px;
            }
        </style>
    </head>

    <body>
        <form method="POST" action="update.php?passwd=<?php echo $re[2]?>" >
            <table>

                <tr>
                    <td colspan="2"><h3>[ List 번호 <?php echo "$re[0]"?> ]</h3></td>
                </tr>
                <tr>  
                    <td>작성자</td>
                    <td><input type="text" name="user" value="<?php echo $re[1]?>"></td>
                </tr>
                <tr>  
                    <td>비밀번호</td>
                    <td><input type="text" name="pass" value="<?php echo $re[2]?>"></td>
                </tr>
                <tr>  
                    <td>할 일</td>
                    <td><input type="text" name="todo" value="<?php echo $re[3]?>"></td>
                </tr>
                <tr>  
                     <td colspan="2"><input type="radio" name="complete" value="완료">완료
                         <input type="radio" name="complete" value="미완료">미완료 </td>
                </tr>
                <tr>
                    <td colspan="2"> <button type="sumit">수정완료</button></td>
                </tr>
            </table>
        </form>
    </body>

</html>

<?php
    }
?>