<?php
session_start();
include_once "model/clsConexao.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_EMAIL);

echo "Nome: $nome <br>";
echo "cpf: $cpf <br>";


$query = "UPDATE clientes SET nome='$nome', cpf='$cpf', modified=NOW() WHERE id='$id'";
$result = Conexao::consultar($query);


if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: edit_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
?>