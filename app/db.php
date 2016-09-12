<?php 


// Connect database localhost
$db = new PDO('mysql:host=localhost;dbname=locations', 'root', '');
$db->exec("set names utf8");

// eles szerver
// $db = new PDO('mysql:host=localhost;dbname=protuzep_hu_maps', 'protuzep_hu', 'knublbcj');
// $db->exec("set names utf8");