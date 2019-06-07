<?php

include 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    $query = mysqli_query($connect, $sql);

    if(!$query)
    {

    die("Erro ao excluir o usuário. " . mysqli_error($connect));

    } else
    {

    echo "<script>
    
         alert('Usuário Excluído com sucesso!');
         window.location = 'index.php';

        </script>";

    }