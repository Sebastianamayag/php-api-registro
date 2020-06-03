<?php

	 $host ="23.236.50.121";
    $puerto = "3306";
    $user ="root";
    $pw = "matias2014se98";
    $db ="movil";
    function Conectarse($host,$puerto,$user,$pw,$db) {
    if (!($link = mysqli_connect($host.":".$puerto, $user, $pw))){ 
            echo "Error conectando a la base de datos.<br>"; 
           exit(); 
         }else{
          echo " ";
          }
          if (!mysqli_select_db($link, $db)) 
        { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
        }else{
           echo " "; 
         }
       return $link; 
}
//conectarse a la bd
$link = Conectarse($host,$puerto,$user,$pw,$db);
//metodo para ver los datos

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$idusuarios = $_POST['idusuarios'];
	$nombre = $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$correo= $_POST['correo'];
	$pass = $_POST['password'];


	$connect->query("INSERT INTO usuarios (idusuarios,nombre,apellido,correo,pass) VALUES ('".$idusuarios."','".$nombre."','".$apellido."','".$correo."','".$password."')")
	}
?>