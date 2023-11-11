<html>
    <head>
    </head>
    <body>
        <h1>게시글 작성</h1>
        <form action="DB/uploadWriting.php" method="post">
            <div>
                <textarea name="name" id="name" rows="1" cols="13" placeholder="게시자" maxlength="10" required></textarea>
                <textarea name="title" id="title" rows="1" cols="40" placeholder="글제목" maxlength="40" required></textarea>
            </div>
            <div>
                <textarea name="context" id="context" rows="20" cols="57" placeholder="글제목" maxlength="40" required></textarea>
            </div>
            <div class="bt_se" style="margin-top: 10px;">
                <button type="submit">글 작성</button>
            </div>
        </form>
    </body>
</html>
