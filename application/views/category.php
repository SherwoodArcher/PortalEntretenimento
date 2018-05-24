<?php $this->load->view('header');?>

<!-- Inicio do conteudo -->
<div>
    <ol class="breadcrumb corCultural">
        <li><a href="<?php echo base_url()?>">Boom</a></li>
        <li class="active">Cultural</li>
    </ol>
</div>
<div class="container-fluid">
    <!-- Titulo da seção -->

    <div class="page-header">
        <h1><?=$category_name?><small> - <?=$category_description?></small></h1>
    </div>

    <!-- Fim Titulo da seção -->
<?php

    $a =0;

    foreach($query as $categoryItem){
        if($a == 0) {
            echo "<div class='row'><!-- Row Start -->";
        }
        echo "  <div class='col-xs-12 col-sm-6 col-md-4'>
                    <div class='thumbnail'>
                        <img src='".$categoryItem['post_photos']."' alt='Teatro Municipal'>
                        <div class='corCultural' style='height: 5px'></div>
                        <div class='caption'>
                            <h3>".$categoryItem['post_title']."</h3>
                            <p>".substr($categoryItem['post_description'], 0, 300)." ...</p>
                            <p><a href='".base_url('post/'.$categoryItem['post_id'])."' class=''>Mais detalhes</a></p>
                        </div>
                    </div>
                </div>";
        $a++;
        if($a == 2) {
            $a = 0;
            echo "</div><!-- Row End -->";
        }    
    }
?>
</div>   
<!-- Fim do conteudo -->

<?php $this->load->view('footer');?>