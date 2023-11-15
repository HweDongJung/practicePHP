<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$query = "select * from test1 where id=$_GET[id];";
$result = $mysqli -> query($query);
$row = $result -> fetch_array();
?>
<html>
    <head>
    </head>
    <body>
        <h1>게시글 수정</h1>
        <form action="DB/uploadEditing.php?id=<?=$_GET['id']?>" method="post">
            <div>
                <textarea name="name" id="name" rows="1" cols="13" maxlength="10" required readonly><?php echo $row['name'] ?></textarea>
                <textarea name="title" id="title" rows="1" cols="40" placeholder="글제목" maxlength="40" required><?php echo $row['title'] ?></textarea>
                <textarea name="password" id="password" rows="1" cols="10" placeholder="패스워드" maxlength="8" required></textarea>
            </div>
            <div>
                <textarea name="context" id="context" rows="20" cols="57" placeholder="글내용" maxlength="40" required><?php echo $row['context'] ?></textarea>
            </div>
            <div class="bt_se" style="margin-top: 10px;">
                <button type="submit">글 수정</button>
            </div>
        </form>
    </body>
</html>
