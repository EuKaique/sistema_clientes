$(document).ready(function () {
    let input    = $("input")

    let nome     = $("#nome")
    let email    = $("#email")
    let telefone = $("#telefone")
    let cpf      = $("#cpf")

    //Insere o atributo required, para não salvar o formulário em branco
    input.attr('required', true);
    //Insere um tamanho mínimo de caracteres para Validar o formulário
    nome.attr('minlength', 4);
    email.attr('minlength', 10);
    telefone.attr('minlength', 13);
    cpf.attr('minlength', 14);

    //Faz a mascara dos inputs telefone e cpf 
    telefone.mask('00 00000-0000', {reverse: false})
    cpf.mask('000.000.000-00', {reverse: false})         
})