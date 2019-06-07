<?php 

include 'conexao.php';

//consulta por id

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = '$id'";

$query = mysqli_query($connect, $sql);

echo "<table border='1'>";

echo "<tr>
<th>Nome</th>
<th>CPF</th>
<th>Email</th>
<th>Telefone</th>
      </tr>";

if(!mysqli_num_rows($query) > 0){

    die("Não há nenhum registro para ser mostrado");
} else{

    while($row = mysqli_fetch_array($query)){

    echo "<tr>";

    echo "<td>" . $row['nome_cliente'] . "</td>";
    echo "<td>" . $row['cpf_cliente'] . "</td>";
    echo "<td>" . $row['email_cliente'] . "</td>";
    echo "<td>" . $row['tel_cliente'] . "</td>";


    echo "</tr>";

    }

}
echo "</table>";
echo "<br><br>";
echo "<a href='index.php'><button> Voltar para consulta</button>";





