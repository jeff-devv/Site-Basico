<?php
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $cep = $_POST['cep'];

        $banco = "mysql:dbname=dbcadastro;host=localhost";
        $user = "root";
        $pass = "";
        
        try {
            $pdo = new PDO($banco, $user, $pass);
            echo "<h1>Conectado";
        } catch (\Throwable $th) {
            echo "<h1>Erro ao conectar. tente mais tarde";
        }
    }

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_cadastro.css">
    <title>Tela de Cadastro</title>
    
</head>
<body>
    <div class="caixa">
        <h1>Cadastro</h1>
        <form action="" method = "post">
            <input type="text" placeholder="Nome Completo:" name = "nome">
            <br><br>
            <input type="password" placeholder="E-mail:" name = "email">
            <br><br>
            <input type="password" placeholder="Celular:" name = "celular">
            <br><br>
            <input type="password" placeholder="CPF:" name = "cpf">
            <br><br>
            <input type="password" placeholder="RG:" name = "rg">
            <br><br>
            <input type="password" placeholder="Cep:" name = "cep">
            <br><br>
            <a href="file:///C:/xampp1/htdocs/ProjetoSite/valor.html" class="botao-link">
            <button>Cadastrar</button></a>
        </form>
    </div>
</body>
</html>