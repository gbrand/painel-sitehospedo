$(document).ready(function() {
    // new WOW().init();
    // Data tables
    $('.lista-itens').DataTable({
        "lengthChange": false,
        "oLanguage": {
            "sLengthMenu": "Mostrando _MENU_ registros por pagina",
            "sZeroRecords": "Desculpe, não encontramos nenhum dado!",
            "sInfo": "Exibindo _START_ de _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Exibindo 0 de 0 de 0 Registros",
            "sInfoFiltered": "(filtered from _MAX_ total records)",
        }

    });

    // Popover
    $('[data-toggle="popover"]').popover({
        html: true
    });

    // Range sliders
    $("#espaco-conta").slider({
        formatter: function(value) {
            return value + 'mb';
        }
    });

    // **PLUGINS DO PAINEL**
    // Função para adição de itens nos multiselects
    $.fn.addEmailLista = function(email) {
        var htmlOpcao = "<option value='"+email+"'>"+email+"</option>";
        this.append(htmlOpcao);

        alert(tamanho);
    };
    // Funções para remoção de itens nos multiselect
    $.fn.removeEmailLista = function() {
        var id = $(this).text();
        $(this).fadeOut(1000, function(){
            $(this).remove();
        });

        return id;
    };

    // UX - Formulario de recebimentos de email
    // Add destinatrios
    //  - Usando a tecla ENTER
    //  - Clicando no botão
    $("#remetente").keypress(function(e) {
         if(e.which == 13) {
            $("#btn-add-remetente").trigger("click");
        }
    });

    $("#btn-add-remetente").click(function(){
        var destinatario = $("#remetente").val();
        $("#lista-destinatarios").addEmailLista(destinatario);
    });
    // Remove destinatarios
    $("#btn-remove-remetente").click(function(){
        var selecionado = $("#lista-destinatarios option:selected");
        alert("Email: "+selecionado.removeEmailLista()+" removido");
    });

    // UX - Formulario de envios de email
    // Add destinatrios
    //  - Usando a tecla ENTER
    //  - Clicando no botão
    $("#destinatario").keypress(function(e) {
         if(e.which == 13) {
            $("#btn-add-destinatario").trigger("click");
        }
    });

    $("#btn-add-destinatario").click(function(){
        var destinatario = $("#destinatario").val();
        $("#lista-envios").addEmailLista(destinatario);
    });
    // Remove destinatarios
    $("#btn-remove-envio").click(function(){
        var selecionado = $("#lista-envios option:selected");
        alert("Email: "+selecionado.removeEmailLista()+" removido");
    });


});
