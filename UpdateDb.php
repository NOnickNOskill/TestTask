<?php

require_once 'Db.php';

$id = $_POST['uid'];
$name = $_POST['uname'];
$price = $_POST['uprice'];
$rating = $_POST['urating'];

$db = Db::getConection();
$db->query("UPDATE products SET name = '$name', price = '$price', rating = '$rating' WHERE id = '$id'");
$db = null;

