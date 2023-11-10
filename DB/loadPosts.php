<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$query = "select * from test1 order by id desc limit 0,10;";
$result = $mysqli -> query($query);
?>