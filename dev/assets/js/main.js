$(document).ready(function() {
    new WOW().init();
    // Parallax
    $('#chamada-topo .parallax').parallax("60%", 0.2, "10%");
    $('#blog .parallax').parallax("30%", 0.5, "10%");
    $('#rodape').parallax("30%", 0.2, "10%");
    $('#servicos .servico').parallax("30%", 0.2, "10%");

    // Collapse serviços
    $("#servicos .btn-servicos").click(function() {
        var idBtn = $(this).attr("data-servico");
        $("#servicos ." + idBtn).slideToggle('slow');
    });

    // Rolagem Menu

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // Menu mobile
    // Ativa menu mobile
    $("#menu .btn-mobile").click(function() {
        $("#menu-mobile").slideToggle('slow');
    });

    // Forma menu mobile
    var carregaMenuMobile = function() {
        var conteudoMenu = $("#menu .itens").html();

        $("#menu-mobile").html(conteudoMenu);
    };

    carregaMenuMobile();

    // Verifica posicao menu
    $(document).scroll(function() {
        if ($(this).scrollTop() > 20) {
            $("#menu").addClass("resize");
        } else {
            $("#menu").removeClass("resize");
        }
    });

    // Formulario
    jQuery('#contatoForm').submit(function() {
        var dados = jQuery(this).serialize();
        $("#form-load").html("<center><img  src='assets/img/outros/loader.GIF' alt='Enviando' class='tet-center' /></center>");
        jQuery.ajax({
            type: "POST",
            url: "modulos/enviar-contato.php",
            data: dados,
            success: function(data) {
                $("#form-load").html(data);
                $('#contatoForm').each(function() {
                    this.reset();
                });
            }
        });

        return false;
    });

});
