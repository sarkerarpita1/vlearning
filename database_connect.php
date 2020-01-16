<?php

$my_sql_host = 'localhost';
$my_sql_user = 'root';
$my_sql_pass = '';

$mysql_db = 'web service';

if (!mysql_connect('localhost', 'root', '') || !mysql_select_db($mysql_db)) 
{
die('not connect');
}


?>