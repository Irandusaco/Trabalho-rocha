<?php  
$host="localhost";
$nome="root";
$senha ="";
$banco = "saco";

$con = mysqli_connect($host,$nome,$senha,$banco);
if($con){
	echo "Conectado ";
}else{
	echo "Erro ao conectar";
} 

?>