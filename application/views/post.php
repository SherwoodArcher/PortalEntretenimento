<?php $this->load->view('header');?>

<!-- Inicio do conteudo -->
<div>
    <ol class="breadcrumb corPadrao">    
        <li><a href="<?php echo base_url()?>">Boom</a></li>        
        <li class="active"><?=$post_title?></li>
    </ol>
</div>
<div class="container-fluid">
    <div class="row">            
        <div class="col-md-10 col-md-offset-1">
            <!-- Titulo da seção -->      
            <div class="page-header">
                <h1><?=$post_title?></h1> 
            </div>
            <!-- Fim Titulo da seção -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">            
            <?php
            if(file_exists($post_photos)){ ?>
                <img src="<?=$post_photos?>" />
            <?}?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Conteúdo do Post-->
            <?=$post_description?>
        </div>
    </div>
</div>
<!-- Fim do conteudo -->
<?php $this->load->view('footer');?>










                    