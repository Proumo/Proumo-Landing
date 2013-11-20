/**
 * Função para lançar a notificação
 * @param {String} titulo da notificação
 * @param {String} texto a ser exibido no corpo da notificação
 * @param {String} tipo_msg tipo da mensagem como sucesso, erro, informação ou alerta.
 */
function notificar(titulo, texto, tipo_msg){
    $.pnotify({
        title: titulo,
        text: texto,
        type: tipo_msg
    });
}//fim notificar

function formulario_valido(id_form){
    var inputs = $("#"+id_form + " :input");
    var valido = true;

    inputs.each(function(){
        if( $(this).val() == "" || $(this).val() == null ) return valido = false;
    });

    return valido;
}

function limpa_formulario(id_form){
    var inputs = $("#"+id_form + " :input");

    inputs.each(function(){
        $(this).val('');
    });
}