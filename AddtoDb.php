<?php

require_once 'Db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$rating = $_POST['rating'];

$db = Db::getConection();
$db->query("INSERT INTO products VALUES (null, '$name', $price, $rating)");
$db = null;





