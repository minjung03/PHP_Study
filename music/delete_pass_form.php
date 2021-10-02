<?php
    $passwd = $_GET['passwd'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form method="POST" action="delete.php">
            <h2>비밀번호 확인</h2>

            <input type="text" name="u_pass"></br>
            <input type="hidden" name ="passwd" value="<?php echo $passwd ?>">

            (참고) 비밀번호 : <?php echo $passwd ?></br>

            <button type="submit">입력</button>

        </form>
    </body>
</html>
