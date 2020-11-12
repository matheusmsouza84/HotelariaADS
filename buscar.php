<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
    <body>
        <div class="header">Hotel blablabla</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="CadastrarCliente.php">
                                <button class="btn btn-primary" type="button">Página Inicial</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="shadow-lg bg-white" id="divsombra">
                    <h4><b>Buscar Cadastro</b></h4><br>
                    <form method="POST" id="formbusca" action="XXXXXX" >
                        <input type="text" placeholder="Insira seu CPF" name="cpfb" required> <br> <br>
                        <input class="btn btn-success" type="submit" value="Buscar">
                        </form>
                 </div>
            </div>
            <div class="show">

            </div>
        <div class="footer"></div>
    </body>
</html>