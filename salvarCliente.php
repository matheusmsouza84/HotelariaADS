<?php
    include_once "clsConexao.php";

    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $datanasc = $_POST['datanasc'];
    $sexo = $_POST['sexo'];
    $estadocivil = $_POST['estadocivil'];

    $query = "INSERT INTO cliente (nome, rg, cpf, endereco, telefone, cep, datanasc, sexo, estadocivil) VALUES ('$nome', '$email', '$senha')";
    $result = Conexao::executar($query);
    header("Location: ../CadastrarCliente.php");
?>