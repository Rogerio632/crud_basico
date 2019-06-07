<?php
    
    if(isset($_POST['acao']))
    {
    if($_POST['acao'] == "cadastrar")
    {
        cadastrar();        
    }
    if($_POST['acao'] == "edicao"){

        alterar();

    }
    
    }

    function cadastrar()
    {

        include 'conexao.php';

        
    $nome_cliente = filter_input(INPUT_POST, "nome_cliente");
    $cpf_cliente  = filter_input(INPUT_POST, "cpf_cliente");
    $email_cliente = filter_input(INPUT_POST, "email_cliente");
    $tel_cliente   = filter_input(INPUT_POST, "tel_cliente");

    $sql = "INSERT INTO clientes VALUES('', '$nome_cliente', '$cpf_cliente',
            '$email_cliente', '$tel_cliente')";

    $consulta_sql = "SELECT email_cliente FROM clientes WHERE email_cliente = '$email_cliente'";

    $select_query = mysqli_query($connect, $consulta_sql);

    if(!mysqli_num_rows($select_query) > 0)
    {
    $query = mysqli_query($connect, $sql);
    
    if(!$query){

        die("Erro ao cadastrar: " . mysqli_error($connect));

    } else{
        
        echo "<script>
        
        alert('Cadastrado com sucesso!');
        window.location = 'index.php';
        
             </script>";
       

    }
    
} else{

 echo "<script>

    alert(' E-mail já existente. Se cadastre com outro e-mail');

 window.location='cadastrar.php';

 </script>";
 
 

}
    mysqli_close($connect);

    }

    function alterar(){

    require 'conexao.php';

    $id = $_POST['id'];
    $nome_cliente = filter_input(INPUT_POST, "nome_cliente");
    $cpf_cliente  = filter_input(INPUT_POST, "cpf_cliente");
    $email_cliente = filter_input(INPUT_POST, "email_cliente");
    $tel_cliente   = filter_input(INPUT_POST, "tel_cliente");

    $sql = "UPDATE clientes SET
            nome_cliente = '$nome_cliente',
                cpf_cliente = '$cpf_cliente',
                    email_cliente = '$email_cliente',
                      tel_cliente = '$tel_cliente'
                          WHERE id = '$id' 
                          ";
    
    $query = mysqli_query($connect, $sql);

    if(!$query){

    die("Erro ao fazer a alteração: " . mysqli_error($connect));

    } else{

       echo  "<script>
       
            alert('Alteração realizada com sucesso!');
            window.location='index.php';

            </script>";

    }
    }

    

