<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
    <body>
        <table class="table table-hover">
                <tr>
                    <td>순번</td>
                    <td>제목</td>
                    <td>가수</td>
                    <td>장르</td>
                    <td>가격</td>
                    <td>발매년도</td>
                    <td>비고</td>
                </tr>
                <?php

                $url = "localhost";
                $id = "test";
                $password = "1111";
                $db = "testdb";

                $conn = mysqli_connect($url, $id, $password, $db);
                $sq1 = "select * from music";

                $result = mysqli_query($conn, $sq1); 
                $cnt = mysqli_num_rows($result);


                for($i = 0; $i<$cnt ; $i++){
                    $re = mysqli_fetch_row($result); 

                    ?>
                    <tr><td><?php echo"$re[0]" ?></td>
                        <td><?php echo"$re[1]" ?></td>
                        <td><?php echo"$re[2]" ?></td>
                        <td><?php echo"$re[3]" ?></td>
                        <td><?php echo"$re[4]" ?></td>
                        <td><?php echo"$re[6]" ?></td>
        
                        <td>
                        <?php 
                            echo "<a href='update_pass_form.php?passwd=$re[5]'>수정 ";     
                            echo "<a href='delete_pass_form.php?passwd=$re[5]'>삭제</td></tr>";
                        ?>
                        </td>
                    </tr>
        
                <?php
                }
                ?>
        </table>
    </body>
</html>
