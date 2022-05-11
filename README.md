# Gestão de Clientes
Sistema AUTH e CRUD feito com CodeIgniter 4

## Informações básicas
- Tela de login e cadastro
- Tabela com dados fictícios
- Filtros e paginação
- Endpoints REST

## Tecnologias usadas
- PHP 7*
- HTML, CSS, JAVASCRIPT e JQUERY
- BOOTSTRAP, FONT AWESOME, DATA TABLES
- MYSQL
- CODEIGNITER 4.1.9

## Requisitos para instalar
- Composer
- PHP 7*
- MYSQL 8

## Como instalar e usar
- Faça o download, ou clone o repositório em sua máquina
- Depois de ter o Composer, PHP e MYSQL instalados e configurados, basta acessar a pasta raiz do repositório dentro do shell e executar o seguinte comando:
- php spark serve
- Use a seguinte URL em seu navegador http://localhost:8080

## Observações
- Você precisará criar o banco de dados e as tabelas dentro do seu SGBD, para que o sistema funcione corretamente
- Dentro do arquivo  *App\Config\Database.php* defina as configurações do banco
- Crie duas tabelas, uma que vai conter os dados do cliente, e outra que vai conter os dados do usuário que vem do login
- A coluna "tipo" define se um usuário vai poder fazer os Updates e Deletes

## Sobre os End points
- Criei as rotas dentro do arquivo *App\Config\Routes.php*
- **GET:** Usei para pegar e listar os dados da tabela clientes
- **POST:** Usei essa rota para Criar um novo cliente, geralmente essa rota é usada para inserir dados que vem de um formulário
- **PUT:** Usei para atualizar um cliente que já existe no banco, a rota put é específica para esses casos
- **DELETE:** Como o próprio nome já diz, apaga os dados de um cliente
