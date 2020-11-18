<?php
session_start();
include_once "model/clsConexao.php";

    $query = "SELECT nome, rg, cpf, cep FROM clientes WHERE statusc = 1";
    $result = Conexao::consultar($query);
    
    $str = "";
    while ($row_cliente = mysqli_fetch_assoc($result)){
        $str .= implode(';', $row_cliente) .';'. PHP_EOL;
    }
    
    file_put_contents('dados.csv', $str);
   
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=dados.csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    
echo $str;


?>

