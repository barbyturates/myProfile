<?php
session_start();
require 'db_conn.php';
$db = new DataBase();

if ($db->authen_login($_POST['uname'], $_POST['pword'])){
}

 ?>