<?php
    $passwd = $_GET['passwd'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            form {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <form method="POST" action="delete.php">

            <h2>비밀번호 확인</h2>
            password :  <input type="text" name="u_pass" placeholder="(참고) <?php echo $passwd ?>"><br>
            <input type="hidden" name="passwd" value="<?php echo $passwd ?>" >
            <br>
            
            <button type="submit">입력</button>
    </body>
</html>
