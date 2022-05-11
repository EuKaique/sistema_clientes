<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/img/logo.png" >
    <title>Gestão de clientes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" > 
    <link rel="stylesheet" href="/assets/css/login.css" >
  </head>
  <body class="text-center">    
    <main class="form-signin">
    <?php if(isset($validation)):?>
    <div class="alert alert-warning">
        <?= $validation->listErrors() ?>
    </div>
    <?php endif;?>
    <form action="<?php echo base_url(); ?>/CadastroController/store" method="post">
        <img class="mb-4" src="/assets/img/logo-login.png" alt="Gestão de Clientes" width="72" height="57">
        <h4 class="mb-3">Cadastre-se para continuar</h4>
        <div class="form-group mb-3">
            <input type="text" name="nome" placeholder="Nome" value="<?= set_value('nome') ?>" class="form-control" >
        </div>
        <div class="form-group mb-3">
            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
        </div>
        <div class="form-group mb-3">
            <input type="password" name="senha" placeholder="Senha" class="form-control" >
        </div>
        <div class="form-group mb-3">
            <input type="password" name="confirmasenha" placeholder="Confirme a senha" class="form-control" >
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        <p class="mt-5 mb-3 text-muted">Kaique &reg; 2022</p>
    </form>
    <?php $msg = session()->getFlashData('msg') ?>
    <?php if(!empty($msg)): ?>
        <div class="alert alert-danger">
            <?= $msg ?>
        </div>
    <?php endif; ?>    
    </main> 
  </body>
</html>