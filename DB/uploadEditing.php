<?php
echo"업로드중..";
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$context = $_POST['context'];
$title = $_POST['title'];
$query = "UPDATE test1
SET context = '".$context."', title ='".$title."' WHERE id=".$_GET['id'].";";
$result = $mysqli -> query($query);
header("location: /index.php");
?>