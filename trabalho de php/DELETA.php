<!DOCTYPE html>
<html>
<head>
	<title>Deletar todos os alunos</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
require_once'conexao.php';


$numero = $_GET['id'];

$sql = "DELETE FROM alunos WHERE numero = '$numero' ";
$r = mysqli_query($con, $sql);
if($r){
	echo "Deletado com sucesso";
}else{
	echo "ocorreu um Erro ao Deletar ";
} 

    ?>


</html>