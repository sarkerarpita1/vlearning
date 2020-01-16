<?php

$my_sql_host = 'localhost';
$my_sql_user = 'root';
$my_sql_pass = '';

$mysql_db = 'web service';

$mysqli = new mysqli($my_sql_host, $my_sql_user, $my_sql_pass, $mysql_db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>