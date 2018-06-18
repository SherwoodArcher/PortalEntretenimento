<?php $this->load->view('header');?>
<script src="<?php echo base_url('assets/js/cadastrousuario.js');?>"></script>
        <div>
            <ol class="breadcrumb corPadrao" style="margin: 0px;">
                <li><a href="/">Boom</a></li>
                <li class="active" style="color: #FFF">Cadastro de usuário</li>
            </ol>
        </div>

        <div class="padding10px">            
            <?php echo validation_errors(); ?>
            <?php echo form_open('usuario/novo','class=form-horizontal'); ?>
                <fieldset>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Cadastro de usuário</h4></div>

                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-11 control-label">                                
                                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                                <div class="col-md-8">
                                    <input id="nome" name="nome" class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                               </div>

                                <label class="col-md-1 control-label" for="dtnasc">Nascimento<h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                </div>

                                <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
                                <div class="col-md-4"> 
                                    <label required="" class="radio-inline" for="radios-0" >
                                        <input name="sexo" value="F" type="radio" required>
                                        Feminino
                                    </label> 
                                    <label class="radio-inline" for="radios-1">
                                        <input name="sexo" value="M" type="radio">
                                        Masculino
                                    </label>
                                    <label class="radio-inline" for="radios-2">
                                        <input name="sexo" value="O" type="radio">
                                        Outros
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="cep">CEP <h11>*</h11></label>
                                <div class="col-md-2">
                                    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="rua">Endereço</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rua</span>
                                        <input id="rua" name="rua" class="form-control" placeholder="Rua" required="" readonly="readonly" type="text">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nº <h11>*</h11></span>
                                        <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Complemento</span>
                                        <input id="complemento" name="complemento" class="form-control" placeholder="Apto nº"type="text">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext"></label>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Bairro</span>
                                        <input id="bairro" name="bairro" class="form-control" placeholder="Bairro" required="" readonly="readonly" type="text">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Cidade</span>
                                        <input id="cidade" name="cidade" class="form-control" placeholder="Cidade"  required=""  readonly="readonly" type="text">
                                    </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Estado</span>
                                        <input id="estado" name="estado" class="form-control" placeholder="Estado" required=""  readonly="readonly" type="text">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email_n">Email <h11>*</h11></label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="email_n" name="email" class="form-control" placeholder="email@email.com" required="" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="senha_n">Senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha_n" name="senha" class="form-control" placeholder="********"  required type="password">
                                    </div>

                                </div>
                                <label class="col-md-2 control-label" for="confirmeSenha">Confirme sua senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="confirmeSenha" name="confirmeSenha" class="form-control" placeholder="********"  required type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Cadastrar"></label>
                                <div class="col-md-8">
                                    <input id="Cadastrar" name="submit" class="btn btn-success" type="Submit" value="Cadastrar" />
                                    <button id="Limpar" name="Limpar" class="btn btn-danger" type="Reset">Limpar</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </fieldset>
                <?php echo form_close();?>
            <!-- </form> -->
        </div>
        <!-- Fim do conteudo -->

<?php $this->load->view('footer');?>
