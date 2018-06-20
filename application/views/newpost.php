<?php $this->load->view("header");?>
<div>
    <ol class="breadcrumb corPadrao" style="margin: 0px;">
        <li><a href="/">Boom</a></li>
        <li class="active" style="color: #FFF">Cadastrar produto/serviço</li>
    </ol>
</div>

<div class="padding10px">
    <?php echo validation_errors(); ?>
    <?php echo form_open('post/novo','class=form-horizontal'); ?>
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastrar produto/serviço</h4></div>

                <div class="panel-body">
                    <div class="form-group">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="titulo">Título </label>  
                        <div class="col-md-9">
                            <input id="titulo" name="titulo" placeholder="Coloque o título da postagem" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="foto">Foto</label>  
                        <div class="col-md-4">
                            <input id="foto" name="foto" placeholder="Coloque o link da imagem" class="form-control input-md" type="text" />
                        </div>
                    </div>                            
    
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="descricao">Descrição</label>  
                        <div class="col-md-9">
                                <textarea id="descricao" name="descricao" placeholder="Coloque os detalhes da sua postagem..." class="form-control input-md" rows="10" cols="180"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="categoria">Selecione a Categoria</label>  
                        <div class="col-md-2">                                    
                            <select class="col-md-12" id="categoria" name="categoria" required="" >                                       
                                <option value="1">Partiu Rolê</option>
                                <option value="2">Descontração</option>
                                <option value="3">Em Movimento</option>
                                <option value="4">Na Faixa</option>
                                <option value="5">Geek</option>
                                <option value="6">Cultural</option> 
                            </select> 
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group"> 
                        <div class="row">                       
                            <div class="col-md-6 col-md-offset-2">
                                <input id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit" value="Cadastrar">
                                <button id="Limpar" name="Limpar" class="btn btn-danger" type="Reset">Limpar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    <?php echo form_close();?>
</div>
<!-- Fim do conteudo -->
<?php $this->load->view('footer');?>