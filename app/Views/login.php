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
    <form action="<?= base_url(); ?>/LoginController/loginAuth" method="post">
        <img class="mb-4" src="/assets/img/logo-login.png" alt="Gestão de Clientes" width="72" height="57">
        <h4 class="mb-3">Faça login para continuar</h4>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>
        <div class="mb-2"></div>
        <div class="form-floating">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="******">
            <label for="senha">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        <p class="mt-2 mb-3 text-muted">Não possui cadastro? <?= anchor(base_url('cadastroController/'), 'Cadastre-se')?> </p>
        <p class="mt-5 mb-3 text-muted">Kaique &reg; 2022</p>
    </form>
    <?php $msg = session()->getFlashData('msg') ?>
    <?php if(!empty($msg)): ?>
        <div class="alert alert-danger">
            <?= $msg ?>
        </div>
    <?php endif; ?>    
    </main>
    <footer>
      <div class="container mt-5">
        
      </div>    
    </footer> 
  </body>
</html>
