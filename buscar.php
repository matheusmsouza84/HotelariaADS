<?php
include_once "model/clsConexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Cadastro </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <body>
    <div class="header">Hotel</div>
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a href="index.php">
                    <button class="btn btn-primary" type="button">Página Inicial</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                     </li>
                </ul>
            </div>
        </nav>
        <div class="content"><br><br><br><br><br><br><br>
                <div class="shadow-lg bg-white" id="divcadastro">
		
		<h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite o cpf" required><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
			$query = "SELECT * FROM clientes WHERE cpf LIKE '%$cpf%'";
			$result = Conexao::consultar($query);
			while($row_clientes = mysqli_fetch_assoc($result)){	
                echo "Nome: " . $row_clientes['nome'] . "<br>";
                echo "CPF: " . $row_clientes['cpf'] . "<br>";
				echo "<a href='edit_usuario.php?id=" . $row_clientes['id'] . "'>Editar</a><br>";
				
			}
		}
		?>
                </div>
        </div>
    <div class="footer"></div>
    </body>
</html>
