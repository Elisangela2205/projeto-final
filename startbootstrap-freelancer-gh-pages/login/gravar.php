<?php

// 1 - Resgate de dados da tela



$nome = $_POST["nome"];

$email = $_POST["email"];

$telefone = $_POST["telefone"];

$mensagem = $_POST["mensagem"];

// 2- conectar a base de dados
//                     (servidor,usuario,senha,banco);

include_once'conexao.php';

// 3- montar a instrução para gravar

$sql = "insert into contato values(null,'".$nome."','".$email."','".$telefone."','".$mensagem."')";

//4 - gravar no banco
if(mysqli_query($con,$sql)){
    //echo "Gravado com sucesso!!!";
    $msg = "Gravado com sucesso";
}else{
    //echo"erro ao gravar..";
    $msg = "erro ao gravar.";
}

//  5 - fechar a conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."');
         location.href='./../index.html';
</script>";
?>

