<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/DB/presetDB.php');
$query = 'SELECT * from test1';
$result = $mysqli -> query($query);

$result->data_seek(0);
$row = $result->fetch_array();
print_r($row['context']);
?>