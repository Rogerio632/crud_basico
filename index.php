<?php include 'conexao.php'; ?>
<html>
<head>
<title>Consulta</title>
</head>
<body style="font-family: arial">

<style>

a{
    font-
}

</style>

<table border='1'>

<tr>
<th>Nome</th>
<th>CPF</th>
<th>Email</th>
<th>Telefone</th>
<th colspan='3'>Ação</th>
</tr>


<?php

$sql = "SELECT id, nome_cliente, cpf_cliente, email_cliente, tel_cliente FROM clientes";

$query = mysqli_query($connect, $sql);

if(!$query){

    die("Erro na query: " . mysqli_error($connect));

}

    

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        
        echo "<tr>";

        echo "<td>" . $row['nome_cliente'] . "</td>";
        echo "<td>" . $row['cpf_cliente'] . "</td>";
        echo "<td>" . $row['email_cliente'] . "</td>";
        echo "<td>" . $row['tel_cliente'] . "</td>";
        
        echo "<td><a href='consulta.php?id=" . $row['id'] . "'>Visualizar</a></td>";
        
        echo "<td><a href='edicao.php?id=" . $row['id']  . "'>Editar</a></td>";

        echo "<td><a href='excluir.php?id=" . $row['id'] . "'>Excluir</a></td>"; 
       

        echo "</tr>";
        
    }

}

    echo "</table>";

mysqli_close($connect);

?>

<br>

<a href="cadastrar.php"><button>Cadastrar usuário</button></a>

</body>
</html>