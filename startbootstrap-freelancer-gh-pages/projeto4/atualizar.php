<?php
//resgate de dados da tela
$id=$_post["id"];
$nome=$_post["nome"];
$email=$_post["email"];
$telefone=$_post["telefone"];
//conexão com banco de dados
include_once'./conexão.php';

//montar instrução de atualização de banco

$sql = "update cliente set nome = '".$nome."',email = '".$email."',telefone = '".$telefone."' where idcliente = ".$id;

//atualizar é igual a gravar

if (mysqli_query($con,$sql)) {
    $msg = "Atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar!";
}

mysqli_close($con);
    echo "<script>alert('".$msg."'); location.href='index.php';</script>";
    


    ?