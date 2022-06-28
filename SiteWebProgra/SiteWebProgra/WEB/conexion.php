<?php 
$con = mysql_connect('codepropecom1.netfirmsmysql.com', 'avanzados', 'Progra@2022'); 
if (!$con) { 
	die('No se conecto: ' . mysql_error()); 
} 

mysql_select_db(progravanzada); 
?>