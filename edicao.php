<?php

require 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = '$id' ";

$query = mysqli_query($connect, $sql);

if(mysqli_num_rows($query) > 0){

    while($row = mysqli_fetch_array($query)){

?>



<form method="POST" action="funcoes.php">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label>Nome:</label>
    <input type="text" name="nome_cliente" value="<?php echo $row['nome_cliente']; ?>">

    <br><br>

    <label>CPF:</label>
    <input type="text" name="cpf_cliente" value="<?php echo $row['cpf_cliente']; ?>">

    <br><br>

    <label>E-mail:</label>
    <input type="text" name="email_cliente" value="<?php echo $row['email_cliente']; ?>">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="tel_cliente" value="<?php echo $row['tel_cliente']; ?>">

    <br><br>

    <input type="hidden" name="acao" value="edicao">

  <p>  <input type="submit" value="Alterar">

    </form>
    <a href="index.php"><button>Voltar</button></a>
</p>


<?php } }  ?>


