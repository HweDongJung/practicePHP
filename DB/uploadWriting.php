<?php
echo"업로드중..";
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$name = $_POST['name'];
$context = $_POST['context'];
$title = $_POST['title'];
$password = $_POST['password'];
$query = "insert into test1 values(null, '".$name."','" .$context."','".$title."', '".$password."')";
$result = $mysqli -> query($query);
header("location: /index.php");
?>