<?php
session_start();
include_once "model/clsConexao.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$estadocivil = filter_input(INPUT_POST, 'estadocivil', FILTER_SANITIZE_STRING);
$statusc = filter_input(INPUT_POST, 'statusc', FILTER_SANITIZE_NUMBER_INT);


echo "Nome: $nome <br>";
echo "RG: $rg <br>";
echo "CPF: $cpf <br>";
echo "endereco: $endereco <br>";
echo "Telefone: $telefone <br>";
echo "CEP: $cep <br>";
echo "Data de Nascimento: $datanasc <br>";
echo "Sexo: $sexo <br>";
echo "Estado Civil: $estadocivil <br>";
echo "Status: $statusc <br>";


$query = "UPDATE clientes SET nome='$nome', rg='$rg', cpf='$cpf', endereco='$endereco', telefone='$telefone', cep='$cep', datanasc='$datanasc', sexo='$sexo', estadocivil='$estadocivil', statusc='$statusc' WHERE id='$id'";
$result = Conexao::executar($query);


if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: edit_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
?>

/*modified=NOW()*/