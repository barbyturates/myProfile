<?php
session_start();
require 'db_conn.php';
$db = new DataBase();

if ($db->obj_delete($_GET['objective_id'])){
}

 ?>