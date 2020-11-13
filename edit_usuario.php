<?php
session_start();
include_once "model/clsConexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM clientes WHERE id = '$id'";
$result = Conexao::consultar($query);
$row_clientes = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Editar </title>
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

		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_clientes['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_clientes['nome']; ?>"><br><br>
			
			<label>cpf: </label>
			<input type="text" name="cpf" placeholder="Digite o seu cpf" value="<?php echo $row_clientes['cpf']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
		
		
        </div>
    <div class="footer"></div>
    </body>
</html>