<?php
$Server = "localhost";
$Userhost = "root";
$Database = "proyect";
$Password = '';
$conecta = mysql_conect($server,$Userhost,$Database);
if($conecta->connect_errno){
    dile("Error al conectar la base de datos ".$conecta->connect_errno);
}
?>
