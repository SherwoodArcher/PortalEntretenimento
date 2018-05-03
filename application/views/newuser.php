<?php $this->load->view('header');?>
        <div>
            <ol class="breadcrumb corPadrao" style="margin: 0px;">
                <li><a href="/">Boom</a></li>
                <li class="active" style="color: #FFF">Cadastro de usuário</li>
            </ol>
        </div>

        <div class="padding10px">            
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
                                <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                                <div class="col-md-8">
                                    <input id="Nome" name="Nome" placeholder="" value="<?php echo set_value('Nome'); ?>" class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                </div>

                                <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                </div>

                                <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
                                <div class="col-md-4"> 
                                    <label required="" class="radio-inline" for="radios-0" >
                                        <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                        Feminino
                                    </label> 
                                    <label class="radio-inline" for="radios-1">
                                        <input name="sexo" id="sexo" value="masculino" type="radio">
                                        Masculino
                                    </label>
                                    <label class="radio-inline" for="radios-2">
                                        <input name="sexo" id="sexo" value="outros" type="radio">
                                        Outros
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                                <div class="col-md-2">
                                    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rua</span>
                                        <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
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
                                        <input id="complemento" name="complemento" class="form-control" placeholder="Apto nº" required=""  type="text">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext"></label>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Bairro</span>
                                        <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Cidade</span>
                                        <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                    </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Estado</span>
                                        <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext">Senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="********" required type="password">
                                    </div>
                                </div>
                                <label class="col-md-2 control-label" for="prependedtext">Confirme sua senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="********" required type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Cadastrar"></label>
                                <div class="col-md-8">
                                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
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

        <!-- Footer -->
        <footer>
            <div>
                <p class="text-center text-white">Boom &copy; Bandtec 2017</p>
            </div>
        </footer>
        <!-- Fim Footer -->

    </body>

</html>
