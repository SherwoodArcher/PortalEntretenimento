<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
        <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css');?>">
        <script src="<?php echo base_url('assets/js/header.js');?>"></script>        
        <script src="<?php echo base_url('assets/js/cadastrousuario.js');?>"></script>

        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Boom" />
        <meta name="description" content="Boom - <?php echo $meta_description ?? "META - Alterar"; ?>" />
        <meta name="keywords" content="boom, diversão, entretenimento, <?php echo $meta_keywords ?? "META - Alterar"; ?>" />
        <meta property="og:url" content="<?php echo current_url(); ?>" />
        <meta property="og:title" content="Boom | <?php echo $fb_title ?? "FB - Alterar"; ?>" />
        <meta property="og:description" content="Boom - <?php echo $fb_description ?? "FB - Alterar"; ?>" />
        <meta property="og:image" content="<?php echo base_url('assets/img/favicon/favicon-360x360.png');?>" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon/favicon.ico');?>" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon/favicon.png');?>" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/img/favicon/apple-icon-57x57.png');?>" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/img/favicon/apple-icon-60x60.png');?>" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/favicon/apple-icon-72x72.png');?>" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/favicon/apple-icon-76x76.png');?>" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/favicon/apple-icon-114x114.png');?>" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/favicon/apple-icon-120x120.png');?>" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/img/favicon/apple-icon-144x144.png');?>" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/favicon/apple-icon-152x152.png');?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/favicon/apple-icon-180x180.png');?>" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon/favicon-16x16.png');?>" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicon/favicon-32x32.png');?>" />
        <link rel="icon" type="image/png" sizes="36x36" href="<?php echo base_url('assets/img/favicon/android-icon-36x36.png');?>" />
        <link rel="icon" type="image/png" sizes="48x48" href="<?php echo base_url('assets/img/favicon/android-icon-48x48.png');?>" />
        <link rel="icon" type="image/png" sizes="72x72" href="<?php echo base_url('assets/img/favicon/android-icon-72x72.png');?>" />
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon/favicon-96x96.png');?>" />
        <link rel="icon" type="image/png" sizes="144x144" href="<?php echo base_url('assets/img/favicon/android-icon-144x144.png');?>" />
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/img/favicon/android-icon-192x192.png');?>" />
        <link rel="manifest" href="<?php echo base_url('assets/img/favicon/manifest.json');?>" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/favicon/ms-icon-144x144.png');?>" />
        <meta name="theme-color" content="#000000" />

    </head>
    <body>

        <!-- Inicio da Barra de Navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <!-- Botão para utilizar em resposividade -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#BarraDeNavegacao">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo do Site -->
                    <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/logo.png');?>" class="logo"></a>
                    <div class="nomeLogo">Boom</div>

                    <div class="mobile navbar-toggle float-right" style="margin-right: 3.5%;">
                        <div class="desktop-hide linkBranco">
                            <a href="#search"><span class="glyphicon glyphicon-search"></span></a>                  
                        </div>
                    </div>

                    <div class="mobile navbar-toggle float-right">
                        <div class="desktop-hide linkBranco">
                            <a href="#login"><span class="glyphicon glyphicon-user"></span></a>                     
                        </div>
                    </div>

                </div>

                <div class="collapse navbar-collapse" id="BarraDeNavegacao">
                    <!-- Categorias da Barra de Navegação -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('index.php/categoria/partiurole');?>">Partiu Rolê</a></li>
                        <li><a href="<?php echo base_url('index.php/categoria/descontracao');?>">Descontração</a></li>
                        <li><a href="<?php echo base_url('index.php/categoria/emmovimento');?>">Em Movimento</a></li>
                        <li><a href="<?php echo base_url('index.php/categoria/nafaixa');?>">Na Faixa</a></li>
                        <li><a href="<?php echo base_url('index.php/categoria/geek');?>">Geek</a></li>
                        <li><a href="<?php echo base_url('index.php/categoria/cultural');?>">Cultural</a></li>
                        <li class="mobile-hide"><a href="#login"><span class="glyphicon glyphicon-user"></span></a></li>                    
                        <li class="mobile-hide"><a href="#search"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                    <!-- Fim das Categorias da Barra de Navegação -->

                </div>
                <!-- Fim da Div Container -->
        </nav>


        <div id="search">
            <div class="close">×</div>
            <form>
                <input type="search" value="" placeholder="digite aqui ..." />
                <div class="linkBranco">
                    <a type="submit">procurar</a>
                </div>
            </form>
        </div>

        <div id="login">
            <div class="close">×</div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('usuario/login'); ?>
                <div class="login">login</div>
                <label for="email_l">usuário:</label>
                <input type="email" value="" id="email_l" name="email_l" placeholder="exemplo@exemplo.com.br" required /><br/>

                <label for="senha">senha:</label><br/>
                <input type="password" id="senha_l" name="senha_l" required placeholder="********" /><br/>
                <div class="linkBranco">
                    <a type="submit" name="submit">entrar</a><br/><br/>
                    <a href="<?php echo base_url('index.php/usuario/novo');?>">não é cadastrado? cadastre-se aqui!</a><br/><br/>
                    <a href="#esqueci">esqueceu sua senha? clique aqui</a>
                </div>
            <?php echo form_close();?>
        </div>


        <div id="esqueci">
            <div class="close">×</div>
            <form>
                <div class="esqueci">esqueci minha senha</div>
                <label for="email">email:</label>
                <input type="email" value="" id="email" placeholder="exemplo@exemplo.com.br" required /><br/>

                <div class="linkBranco">
                    <a type="submit">reenviar senha</a><br/><br/>
                </div>
            </form>
        </div>        
        <!-- Fim da Barra de Navegação -->