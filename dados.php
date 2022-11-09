<?php
    // Dados formulario //
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $sexo = $_GET['sexo'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    

    // Dados de conexao banco //

    $hostname = 'database-formularios-1.cr1tafqlnmv3.us-east-1.rds.amazonaws.com';
    $banco = 'Formulario';
    $usuario = 'admin';
    $senha = 'qweasdzxc25';

    //======================//

    $conexao  = new mysqli("$hostname","$usuario","$senha","$banco");

    
    mysqli_select_db($conexao,$banco) or die ('Falha ao selecionar o banco de dados');




    $sql = "INSERT INTO PESSOAS (nome,sobrenome,sexo,idade,email,telefone) values ('$nome','$sobrenome','$sexo','$idade','$email','$telefone') "; 

    

    if(mysqli_query($conexao,$sql)){
        echo "<br>"."Cadastro feito com sucesso";

    }else{
        echo "<br>"."Erro ao salvar ao cadastrar os dados";
    }


    // =====================  //


?>