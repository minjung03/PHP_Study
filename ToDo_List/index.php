<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <div id="title">
            <h2>[ To-Do List ] </h2>
        </div>
        <table class="table table-hover">    

                <tr>
                    <td>번호</td>
                    <td>작성자</td>
                    <td>할 일</td>
                    <td>수행여부</td>
                    <td>작성날짜</td>
                    <td>비고 </td>
                </tr>

                <?php
                include('./db_conn.php');
                $sql = "select * from todoList ORDER BY id desc";

                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);

                for($i = 0; $i<$count; $i++){
                    $re = mysqli_fetch_row($result); // for문 안에서 읽어오기

                ?>
                <tr class="warning">
                    <td><?php echo"$re[0]" ?></td>
                    <td><?php echo"$re[1]" ?></td>
                    <td><?php echo"$re[3]" ?></td>
                    <td id="chk"><?php echo"$re[4]" ?></td>
                    <td><?php echo"$re[5]" ?></td>
                    <td><a href='update_pass.php?passwd=<?php echo "$re[2]"?>'>수정</a>
                    <a href='delete_pass.php?passwd=<?php echo "$re[2]"?>'>삭제</a></td>
                </tr>

                <?php
                }
                ?>
        </table>

        <div id="list_write">
            <a href="insert.html">ToDo 작성하기</a>
        </div>

    </body>
</html>
