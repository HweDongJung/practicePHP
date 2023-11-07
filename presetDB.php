<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
$mysqli = new mysqli($DB['HOST'],$DB['id'],$DB['pw'],$DB['db']);

if($mysqli){
    //echo "MySQL 접속 성공";
}else{
    die("서버와의 연결 실패! : ".mysqli_connect_error());
}

?>