<?php

$host = 'localhost';
$user = 'jsuen';
$pass = '';
$db = 'Project';

$connect = mysql_connect($host, $user, $pass) or die("Could not connect.");

mysql_select_db($db) or die("Could not select database.");

?>