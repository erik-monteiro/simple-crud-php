<?php

$mysql = new mysqli(
	"localhost",
	"your_username_here",
	"your_password_here",
	"your_database_name_here"
);

$mysql->set_charset('utf8');

if ($mysql->connect_error) {
  echo 'Erro: ' . $mysql->connect_error;
} 

?>