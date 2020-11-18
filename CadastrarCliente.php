<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Cadastrar Cliente </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="header">Hotel</div>
        <nav class="navbar navbar-expand-md">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a href="dashboard.php">
                    <button class="btn btn-primary" type="button">Páginal Inicial</button>
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
            <div class="content">
            <style>
                input[type=number]::-webkit-inner-spin-button,
                input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
                }
            </style>
                <div class="shadow-lg bg-white" id="divcadastro">
                    <h1>Cadastro Cliente</h1><br>
                    <p><small><b>Todos os itens marcados(*) são obrigatórios</b></small><p>
                    <p><small><b>No CPF e RG colocar somente números</b></small><p>
                    <form method="POST" action="controller/salvarCliente.php">
                        <label>Nome Completo:* </label>
                            <input type="text" name="nome" placeholder="Digite seu nome completo" required> <br> <br>
                        <label>RG:* </label>
                            <input type="number" name="rg" placeholder="Digite seu RG" required> <br> <br>
                        <label>CPF:* </label>
                            <input type="number" name="cpf" placeholder="Digite seu CPF" required> <br> <br>
                        <label>Endereço:* </label>
                            <input type="text" name="endereco" placeholder="Digite seu endereço" required> <br> <br>
                        <label>telefone:* </label>
                            <input type="number" name="telefone" placeholder="Ex: 51987654321" required> <br> <br>
                        <label>CEP:* </label>
                            <input type="number" name="cep" placeholder="Digite seu CEP" required> <br> <br>
                        <label>Data de nascimento:* </label>
                            <input type="date" name="datanasc"required> <br> <br>
                        <label>Sexo:*</label>
                                <select name="sexo" id="sexoid" required>
                                    <option value=""> Selecione </option>
                                    <option value="Masculino"> Masculino </option>
                                    <option value="Feminino"> Feminino </option>
                                </select><br><br>
                            <label>Estado Civil:*</label>
                                <select name="estadocivil" id="estid" required>
                                    <option value=""> Selecione </option>
                                    <option value="Casado"> Casado(a) </option>
                                    <option value="Solteiro"> Solteiro(a) </option>
                                    <option value="Viuvo"> Viúvo(a) </option>
                                </select><br><br>
                        <input class="btn btn-primary" type="submit" value="Cadastrar"> <br>
                    </form>
                    <br>
                </div>
            </div>

</body>
</html>
