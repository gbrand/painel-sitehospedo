<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Hospedo - Painel 1.0</title>
    <link rel="shortcut icon" href="<?php echo URL::getBase(); ?>assets/img/favicon/icone.ico" type="image/x-icon" />
    <!-- Main -->
    <link href="<?php echo URL::getBase(); ?>assets/css/min/main.min.css" rel="stylesheet">
    <link href="<?php echo URL::getBase(); ?>assets/css/min/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
  </head>

  <body id="painel">

    <!-- Topo -->
    <header id="topo">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="<?php echo URL::getBase(); ?>assets/img/logos/logo-s-icone-colorido-md.png" alt="">
                </div>
                <div class="sth-menu-usuario">
                    <img src="<?php echo URL::getBase(); ?>assets/img/logos/icon-color.png" class="sth-icone" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- Main -->
    <section id="main">
        <div class="row">
            <!-- Menu lateral -->
            <aside class="sth-menu-lateral">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Sidebar menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav" id="menu-lateral">
                                <li class="titulo">
                                    <a href="#" data-parent="#menu-lateral" class="collapsed">
                                        <h4>
                                          Domínios <i class="fa fa-globe pull-right"></i>
                                      </h4>
                                  </a>
                              </li>
                              <!-- lions.com.br -->
                              <?php
                              foreach ($getDomnios->body as $values) {
                                ?>

                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#dominio<?php echo $values->id; ?>" data-parent="#menu-lateral" class="collapsed">
                                      <?php echo $values->dominio; ?> <span class="caret pull-right"></span>
                                  </a>
                                  <div class="collapse" id="dominio<?php echo $values->id; ?>" style="height: 0px;">
                                    <ul class="nav nav-list">
                                        <li><a href="/dominios/index/?dominio=<?php echo $values->id; ?>"><i class="fa fa-envelope"></i> Emails</a></li>
                                        <li><a href="#"><i class="fa fa-globe"></i> Site</a></li>
                                    </ul>
                                </div>
                            </li>
                            <?php

                        }

                        ?>

        </ul>
    </div>
    <!--/.nav-collapse -->
</div>
</div>
<!-- Conta -->
<div class="sidebar-nav minha-conta">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="menu-lateral">
                <li class="titulo">
                    <a href="#" data-parent="#menu-lateral" class="collapsed">
                        <h4>
                          Minha conta <i class="fa fa-user pull-right"></i>
                      </h4>
                  </a>
              </li>
              <!-- lions.com.br -->
              <li>
                <a href="#" data-parent="#menu-lateral-conta">
                    <i class="fa fa-inbox"></i> Informações
                </a>
            </li>
            <!-- regenciadho.com.br -->
            <li>
                <a href="#" data-parent="#menu-lateral-conta">
                    <i class="fa fa-sign-out"></i> Sair
                </a>
            </li>

        </ul>
    </div>
    <!--/.nav-collapse -->
</div>
</div>
</aside>

<?php
if(Url::getURL(0) != null){
    if( file_exists( "modulos/".Url::getURL(0)."/" . Url::getURL(1) . ".php" ) ){
        require "modulos/".Url::getURL(0)."/" . Url::getURL(1) . ".php";
    }else{
        require "modulos/404.php";
    }
}else{
    require "modulos/home/index.php";
}


?>


</div>
</section>

<p class="creditos">
    Site Hospedo 2015
</p>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo URL::getBase(); ?>assets/js/min/bootstrap.min.js"></script>
<!-- Parallax -->
<script src="<?php echo URL::getBase(); ?>assets/js/min/parallax.js"></script>
<!-- Wow -->
<script src="<?php echo URL::getBase(); ?>assets/js/min/wow.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
<!-- Main -->
<script src="<?php echo URL::getBase(); ?>assets/js/min/main.min.js"></script>
</body>

</html>
