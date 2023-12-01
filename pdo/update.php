<?php

include_once("setup.php");
include_once("CRUD-functions.php");

$param = $_GET["param"];

update($conn, $param);

$conn = null;
?>