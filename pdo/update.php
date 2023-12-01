<?php

include_once("setup.php");
include_once("CRUD-functions.php");

$param = $_GET["param"];

$cc = new ContactCRUD();

$cc->update($param);

$conn = null;
?>