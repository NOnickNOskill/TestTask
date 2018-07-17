<?php

require_once 'Db.php';

$id = substr($_POST['dannie'],0,-3);

$db = Db::getConection();
$db->query("DELETE FROM products WHERE id = '$id'");
$db = null;
