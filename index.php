<?php require_once  $_SERVER['DOCUMENT_ROOT']."/DB/loadPosts.php"; ?>
<!doctype html>
    <head>
        <title>게시판</title>
    </head>
    <body>
    <div id="board_area"> 
  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
            </tr>
        </thead>
        <?php
            while($board = $result->fetch_array())
            {
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70" style="text-align: center;"><?php echo $board['id']; ?></td>
          <td width="500"><a href="view.php?id=<?=$board['id']?>"><?php echo $title;?></a></td>
          <td width="120" style="text-align: center;"><?php echo $board['name']?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="/writing.php"><button>글쓰기</button></a>
    </div>
  </div>
    </body>
</html>
