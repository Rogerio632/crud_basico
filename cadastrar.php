<html>

<head>
<title>Página Inicial</title>
</head>
<body>

    <form method="POST" action="funcoes.php">
    
    <label>Nome:</label>
    <input type="text" name="nome_cliente">

    <br><br>

    <label>CPF:</label>
    <input type="text" name="cpf_cliente">

    <br><br>

    <label>E-mail:</label>
    <input type="text" name="email_cliente">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="tel_cliente">

    <br><br>

    <input type="hidden" name="acao" value="cadastrar">

    <p>
    <input type="submit" value="Cadastrar">

    </form>
    <a href="index.php"><button>Voltar</button></a>
    </p>

</body>
</html>