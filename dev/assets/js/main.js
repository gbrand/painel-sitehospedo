$(document).ready(function() {
    new WOW().init();

    $('.lista-itens').DataTable({
        "lengthChange": false
    });


    $('[data-toggle="popover"]').popover({
        html: true
    });

});
