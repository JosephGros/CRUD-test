<?php 

include_once("setup.php");
include_once("CRUD-functions.php");

$param = $_GET["param"];
delete($conn, $param);


$conn = null;

?>