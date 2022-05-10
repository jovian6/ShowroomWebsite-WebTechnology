<?php 

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id = $id";

echo $sql;

?>