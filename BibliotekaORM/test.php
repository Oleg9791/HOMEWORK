<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\CRUD;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbookk"
];

$db = new Db($config);

$gb = $db->query("SELECT * FROM `gb`");
//print_r($gb);

$crud = new CRUD($config);
//$crud->setTableName("gb");
//$table=$crud->get();
$table = $crud->setTableName("gb")->create()->get();
$table = $crud->setTableName("gb")->update()->get();
$table = $crud->setTableName("gb")->delete()->get();
print_r($table);



