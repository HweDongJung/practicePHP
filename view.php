<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$query = "select * from test1 where id=$_GET[id];";
$result = $mysqli -> query($query);
$id=$_GET['id'];
$row =$result -> fetch_array();
?>
<html>
    <head>
    </head>
    <body>
        <h1>게시글 조회</h1>
        <form>
            <div>
                <textarea name="name" id="name" rows="1" cols="13" maxlength="10" required readonly><?php echo $row['name']; ?></textarea>
                <textarea name="title" id="title" rows="1" cols="40" maxlength="40" required readonly><?php echo $row['title']; ?></textarea>
            </div>
            <div>
                <textarea readonly="readonly" name="context" id="context" rows="20" cols="57" required readonly><?php echo $row['context']; ?></textarea>
            </div>
            <div>
                <button type="button" onclick="location.href='/edit.php?id=<?=$id?>'">수정</button>
            </div>
        </form>
    </body>
</html>
