<?php

$db = new mysqli('localhost', 'root', '', 'expenseapp');
if ($db->connect_errno != null) {
   echo "Error número $db->connect_errno conectando a la base de datos.<br>Mensaje: $db->connect_error.";
   exit(); 
}

?>