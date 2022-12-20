
<?php
//pegar o id
$id = $_get["id"];

//abrir a conexão com o banco
include_once'./conexao.php';
//montar a instrução sql
$sql = "delete from cliente where id cliente = ".$id;

//igual a do gravar
if (mysqli_query($con,$sql)) {
    $msg = "Excluido com sucesso!";
} else {
    $msg = "Erro ao excluir!";
}

mysqli_close($con);
    echo "<script> alert('".$msg."'); location.href='consultar.php';</script>";
    