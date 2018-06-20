<?php $this->load->view("header");?>
 <!-- Inicio da Div dos Destaques-->
 <div class="container-fluid textoPaginaInicial" >

<div class="row gutter-10">
    <!-- Inicio do Slider -->
    <div class="col-sm-12 col-md-12 col-lg-8 margem10pxTopo">

        <div id="sliderDestaques" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#sliderDestaques" data-slide-to="0" class="active"></li>
                <li data-target="#sliderDestaques" data-slide-to="1"></li>
                <li data-target="#sliderDestaques" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide Ativo -->
                <div class="item active">
                    <img src="<?php echo base_url("assets/img/StarWars.jpg")?>" alt="Poster Guerra nas Estrelas">
                </div>
                <!-- Fim do Slide Ativo -->

                <!-- Slide 2 -->
                <div class="item">
                    <img src="<?php echo base_url("assets/img/ComicCon.jpg")?>" alt="Comic Con 2017">
                </div>
                <!-- Fim Slide 2 -->

                <!-- Slide 3 -->
                <div class="item">
                    <img src="<?php echo base_url("assets/img/ShowRock.jpg")?>" alt="Show de Rock">
                </div>
                <!-- Fim Slide 3 -->
            </div>

            <!-- Inicio dos Controles do Slider -->
            <a class="left carousel-control" href="#sliderDestaques" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#sliderDestaques" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>            
            <!-- Fim dos Controles do Slider -->

        </div> 
        <!-- Fim do Slider -->
    </div>

    <div class="col-sm-12 col-md-12 col-lg-4">
                
                    <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo " >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corPartiuRole formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html"> 01 Jan
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_01.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                Rock in Rio - Pista Principal</a>                                            
                            </div>
                        </div>
                    </div>

                    <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo" >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corDescontracao formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html">02 Fev
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_02.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                Avengers - Infinity War</a>                                          
                            </div>
                        </div>
                    </div>

                     <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo" >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corEmMovimento formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html">03 Mar
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_03.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                Maratona São Silvestre - 42Km</a>                                      
                            </div>
                        </div>
                    </div>

                     <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo" >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corNaFaixa formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html">04 Abr
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_04.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                Como se divertir sem gastar nada</a>                                            
                            </div>
                        </div>
                    </div>

                     <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo" >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corGeek formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html">05 Mai
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_05.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                ComicCon - com 15% de Desconto</a>                                            
                            </div>
                        </div>
                    </div>

                     <div class="panel-body" style="padding: 0 15px;">
                        <div class="row margem10pxTopo" >
                            <div class="col-xs-2 col-sm-1 col-lg-2 corCultural formatacaoTexto textCenter linkPreto">
                                <a href="post_cultural.html">06 Jun
                            </div>
                            <div class="col-xs-4 col-sm-2 col-lg-4">
                                <img src="<?php echo base_url("assets/img/calendario/calendario_06.jpg")?>" />
                            </div>
                            <div class="col-xs-6 col-sm-3 col-lg-6 formatacaoTexto textLeft linkPreto">
                                MAM - Museu de Arte Moderna</a>                                           
                            </div>
                        </div>
                    </div>
                 
    </div>

</div>
</div>
<!-- Fim da Div dos Destaques -->


<!-- Inicio do Grid das Categorias -->
<div class="container-fluid">
<div class="row gutter-10">

    <!-- Inicio PartiuRole -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade partiuRole linkPreto">

            <a href="<?php echo base_url("index.php/categoria/partiurole")?>">partiu rolê

                <div class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/01_partiu_role/partiu_role_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/01_partiu_role/partiu_role_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/01_partiu_role/partiu_role_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a>
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim PartiuRole -->


    <!-- Inicio Descontracao -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade descontracao linkPreto">

            <a href="<?php echo base_url("index.php/categoria/descontracao");?>">descontração

                <div id="sliderDescontracao" class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/02_descontracao/descontracao_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/02_descontracao/descontracao_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/02_descontracao/descontracao_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a> 
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim Descontracao -->


    <!-- Inicio Em Movimento -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade emMovimento linkPreto">

            <a href="<?php echo base_url("index.php/categoria/emmovimento");?>">em movimento

                <div id="sliderEmMovimento" class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/03_em_movimento/em_movimento_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/03_em_movimento/em_movimento_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/03_em_movimento/em_movimento_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a>
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim Em Movimento -->


    <!-- Inicio Na Faixa -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade naFaixa linkPreto">

            <a href="<?php echo base_url("index.php/categoria/nafaixa");?>">na faixa                            

                <div id="sliderNaFaixa" class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/04_na_faixa/na_faixa_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/04_na_faixa/na_faixa_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/04_na_faixa/na_faixa_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a>
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim Na Faixa -->


    <!-- Inicio Geek -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade geek linkPreto">

            <a href="<?php echo base_url("index.php/categoria/geek");?>">geek

                <div id="sliderGeek" class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/05_geek/geek_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/05_geek/geek_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/05_geek/geek_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a>
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim Geek -->


    <!-- Inicio Cultural -->
    <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 margem10pxTopo">
        <div class="formatacaoTexto efeitoOpacidade cultural linkPreto">

            <a href="<?php echo base_url("index.php/categoria/cultural");?>">cultural

                <div id="sliderCultural" class="carousel slide mobile-hide" data-ride="carousel">
                    <!-- Inicio Slider -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide Ativo -->
                        <div class="item active">
                            <img src="<?php echo base_url("assets/img/06_cultural/cultural_01.jpg")?>">
                        </div>
                        <!-- Fim do Slide Ativo -->

                        <!-- Slide 2 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/06_cultural/cultural_02.jpg")?>">
                        </div>
                        <!-- Fim Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="<?php echo base_url("assets/img/06_cultural/cultural_03.jpg")?>">
                        </div>
                        <!-- Fim Slide 3 -->
                    </div>

                </div></a>
            <!-- Fim do Slider -->

        </div>
    </div>
    <!-- Fim Cultural -->


</div>
</div>
<!-- Fim do Grid das Categorias -->
</body>
</html>