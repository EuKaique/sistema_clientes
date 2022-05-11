<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="/assets/img/logo.png">
    <title>Adicionar - Cliente</title>
</head>
<body class="bg-light">
    <div class="container mt-5 col-md-6">
        <form action="<?= base_url(); ?>/ClienteController/store" method="post">
            <input type="hidden" name="id" id="id" class="form-control" value="<?= isset($cliente['id']) ? $cliente['id'] : '' ?>">
            <div class="form-group mt-4">
                <label for="nome" class="fw-bold">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite um nome" value="<?= isset($cliente['nome']) ? $cliente['nome'] : '' ?>">
            </div>
            <div class="form-group mt-4">
                <label for="email" class="fw-bold">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="exemplo@email.com" value="<?= isset($cliente['email']) ? $cliente['email'] : '' ?>">
            </div>
            <div class="form-group mt-4">
                <label for="telefone" class="fw-bold">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="11 95555-5555" value="<?= isset($cliente['telefone']) ? $cliente['telefone'] : '' ?>">
            </div>
            <div class="form-group mt-4">
                <label for="cpf" class="fw-bold">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="123.123.123-12" value="<?= isset($cliente['cpf']) ? $cliente['cpf'] : '' ?>">
            </div>
            <input type="submit" value="Salvar" class="btn btn-success mt-3">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="/assets/js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>