$(document).ready(function(){
    $('#mydatatable').DataTable()

    $('#mydatatable_length select').addClass('form-control')
    $('input[type=search]').addClass('form-control')
    
    $('input[type=search]').attr('placeholder','Buscar...')
})
//Alert para confirmar a exclusão do cliente
function apagar(){
    if(!confirm('Desejar apagar esse cliente?')){
        return false
    }else{
        return true
    }
}