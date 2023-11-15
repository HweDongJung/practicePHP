<?php
echo"업로드중..";
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$real_password = $mysqli -> query("select password from test1 where id =".$_GET['id'].";");
$real_password = $real_password -> fetch_array();
$context = $_POST['context'];
$title = $_POST['title'];
$password = $_POST['password'];
if($real_password['password'] == $password){
    $query = "UPDATE test1
    SET context = '".$context."', title ='".$title."' WHERE id=".$_GET['id'].";";
    $result = $mysqli -> query($query);
    header("location: /index.php");
} else{
    echo "<script>alert('패스워드가 다릅니다');</script>";
    echo "<script>history.back();</script>";
}
?>