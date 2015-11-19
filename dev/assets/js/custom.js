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
		return  value + 'mb';
	}
    });

});
