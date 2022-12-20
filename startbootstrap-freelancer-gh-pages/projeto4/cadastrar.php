<?php include_once('cabecalho.php'); ?>
    <h1><span class="badge badge-dark">Cadastro de clientes</span></h1>
    <hr>
    <form action="gravar.php" method="post">
        Nome:<br/><input type="text" name="nome" palceholder="Digite seu nome" class="btn btn-outline-dark" required/> <br/><br/>
        Email:<br/><input type="text" name="email" palceholder="Digite seu email" class="btn btn-outline-dark" required/> <br/><br/>
        Telefone:<br/><input type="text" name="telefone" palceholder="Digite seu telefone" class="btn btn-outline-dark" required/> <br/><br/>
        <input type="submit" value="Cadastrar" class="btn btn-dark"/>
    </form>
<?php include_once('rodape.php'); ?>   