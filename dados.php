<?php
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $sexo = $_GET['sexo'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    


    // Conexão Mysql //

    $hostname = 'localhost';
    $banco = 'formulario';
    $usuario = 'root';
    $senha = '';



    $conexao = mysqli_connect('localhost','root','') or die ('Falha ao fazer a conexão no banco de dados');

    mysqli_select_db($conexao,$banco) or die ('Falha ao selecionar o banco de dados');

    $sql = "INSERT INTO pessoas (nome,sobrenome,sexo,idade,email,telefone) values ('$nome','$sobrenome','$sexo','$idade','$email','$telefone') "; 

    

    if(mysqli_query($conexao,$sql)){
        echo "<br>"."Cadastro feito com sucesso";

    }else{
        echo "<br>"."Erro ao salvar os dados";
    }


    // =====================  //


?>