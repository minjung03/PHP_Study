<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css?after">
        <link rel="stylesheet" href="./css/list.css?after">

        <script>
        function imageView(url) {
            if(url) {
            //alert(url);
                var imgW = document.getElementById('img1').naturalWidth;
                var imgH = document.getElementById('img1').naturalHeight;
                var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);
                imgWindow.document.write("<img src='"+url+"'>");

            }
        }
        </script>    
    </head>

    <body>

        <div id="head">
            <h2>Book List</h2>
            <a href="insert_pass_form.html">추가하기</a>
        </div>

        <div id="table" class="col-sm-9">
        <table class="table">  
            <tr class="active">
                <td>번호</td>
                <td>제목</td>
                <td>정보</td>
                <td>가격</td>
                <td>이미지(클릭)</td>
                <td>비고</td>
            </tr>
            <?php

            include('./db_conn.php');

            $sql = "select * from Book";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            for($i = 0; $i<$count ; $i++){
                $re = mysqli_fetch_row($result); // 꼭 for문 안에서 실행하기**
            ?>
            <tr><td> </br></br></br> <?php echo"$re[0]" ?></td>
                <td> </br></br></br> <a href='Detail_Info.php?titles=<?php echo "$re[1]"?>'><?php echo"$re[1]"?></a></td>
                <td> </br></br>      <?php echo "$re[2] 지음</br>$re[5]"?> </td>                
                <td> </br></br></br> <?php echo number_format("$re[3]") ?></td>
                <!--<img scr = "C:/...."> 하면 안나옴, 우리가 옮긴 uploads 파일에서 가져와야함. -->
                <td><img src="<?php echo $re[4]?>" onclick="imageView('<?php echo $re[4]?>')" id="img1" width="100px" height="140px"></td>
                <td> </br></br></br>
                    <a href='update_pass_form.php?idx=<?php echo "$re[0]"?>'>수정</a>
                    <a href='delete_pass_form.php?idx=<?php echo "$re[0]"?>'>삭제</a>
                </td>
            </tr>

            <?php
            }
            ?>           
        </table>
        </div>
    <body>
<html>
