<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/jquery_data_table.css">
    <link rel="stylesheet" href="/assets/css/estilo.css">
    <link rel="icon" href="/assets/img/logo.png">
    <title>Gestão de clientes</title>
</head>
<body>
    <div class="container mt-2">
        <h3>Olá, <?= $nome ?></h3>
    </div>
    <div class="container mt-3">
        <!-- Cria o botão de cadastro -->
        <?= anchor(base_url('clienteController/create'), 'Novo cliente', ['class' => 'btn btn-primary mb-3'])?>  
        <?= anchor(base_url('loginController/signOut'), '<i class="fa-solid fa-power-off"></i>', ['class' => 'btn btn-danger mb-3', 'style' => 'float:right;'])?>     
        <table class="table table-bordered" id="mydatatable">
            <thead>
                <tr class="cabecalho">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE</th>
                    <th>CPF</th>
                    <th>DATA DE CADASTRO</th>
                    <?php if($tipo == 'admin'): ?>
                    <th>AÇÕES</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
            <!-- Lista os clientes cadastrados -->
            <?php foreach($clientes as $cliente): ?>
                <tr class="linha">
                    <td><?= $cliente['id']         ?></td>
                    <td><?= $cliente['nome']       ?></td>
                    <td><?= $cliente['email']      ?></td>
                    <td><?= $cliente['telefone']   ?></td>
                    <td><?= $cliente['cpf']        ?></td>
                    <!-- Formata a data cadastrada -->
                    <td><?= date('d/m/Y H:i', strtotime($cliente['updated_at'])) ?></td>
                    <!-- Cria os botões editar e apagar -->
                    <?php if($tipo == 'admin'): ?>
                    <td>
                        <?= anchor('clienteController/edit/'.$cliente['id'], '<i class="fa-solid fa-pen-to-square"></i>', ['class' => 'btn btn-secondary mr-2']) ?>
                        <?= anchor('clienteController/delete/'.$cliente['id'], '<i class="fa-solid fa-trash-can"></i>', ['class' => 'btn btn-danger', 'onclick' => 'return apagar()']) ?>
                    </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery_data_table.js"></script>
    <script src="/assets/js/index.js"></script>
</body>
</html>