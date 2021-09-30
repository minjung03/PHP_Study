<?php
    $idx = $_GET['idx'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/pass_form.css?after">
    </head>

    <body>
        <form method="POST" action="update_form.php">

            <h2>관리자 확인</h2>

            <table>    
                <tr>        
                    <td>Id : </td>
                    <td><input type="text" name="id" placeholder="admin"></td>
                </tr>  
                <tr> 
                    <td>password : </td>
                    <td><input type="text" name="pass" placeholder="admin"></td>
                    <input type="hidden" name ="idx" value="<?php echo $idx ?>">
                </tr>             
            </table>
            <button type="submit">입력</button>
        </form>
    </body>
</html>
