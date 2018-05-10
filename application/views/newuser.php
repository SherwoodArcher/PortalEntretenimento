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
                                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                                <div class="col-md-8">
                                    <input id="nome" name="nome" placeholder="" value="<?php echo set_value('nome'); ?>" class="form-control input-md" required="" type="text">
                                    <?php echo form_error('nome');?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="cpf" name="cpf" placeholder="Apenas números"  value="<?php echo set_value('cpf'); ?>" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                    <?php echo form_error('cpf');?>
                               </div>

                                <label class="col-md-1 control-label" for="dtnasc">Nascimento<h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA"  value="<?php echo set_value('dtnasc'); ?>" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                    <?php echo form_error('dtnasc');?>
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
                                <label class="col-md-2 control-label" for="cep">CEP <h11>*</h11></label>
                                <div class="col-md-2">
                                    <input id="cep" name="cep" placeholder="Apenas números"  value="<?php echo set_value('cep'); ?>" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                    <?php echo form_error('cep');?>
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
                                        <input id="rua" name="rua" class="form-control" placeholder="Rua"  value="<?php echo set_value('rua'); ?>" required="" readonly="readonly" type="text">
                                        <?php echo form_error('rua');?>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nº <h11>*</h11></span>
                                        <input id="numero" name="numero" class="form-control" placeholder=""  value="<?php echo set_value('numero'); ?>" required=""  type="text">
                                        <?php echo form_error('numero');?>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Complemento</span>
                                        <input id="complemento" name="complemento" class="form-control" placeholder="Apto nº"  value="<?php echo set_value('complemento'); ?>" required=""  type="text">
                                        <?php echo form_error('complemento');?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext"></label>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Bairro</span>
                                        <input id="bairro" name="bairro" class="form-control" placeholder="Bairro"  value="<?php echo set_value('bairro'); ?>" required="" readonly="readonly" type="text">
                                        <?php echo form_error('bairro');?>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Cidade</span>
                                        <input id="cidade" name="cidade" class="form-control" placeholder="Cidade"  value="<?php echo set_value('cidade'); ?>" required=""  readonly="readonly" type="text">
                                        <?php echo form_error('cidade');?>
                                    </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Estado</span>
                                        <input id="estado" name="estado" class="form-control" placeholder="Estado"  value="<?php echo set_value('Estado'); ?>" required=""  readonly="readonly" type="text">
                                        <?php echo form_error('estado');?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="email" name="email" class="form-control" placeholder="email@email.com"  value="<?php echo set_value('email'); ?>" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                        <?php echo form_error('email');?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="senha">Senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha" name="senha" class="form-control" placeholder="********"  value="<?php echo set_value('senha'); ?>" required type="password">
                                        <?php echo form_error('senha');?>
                                    </div>

                                </div>
                                <label class="col-md-2 control-label" for="confirmeSenha">Confirme sua senha <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="confirmSenha" name="confirmeSenha" class="form-control" placeholder="********"  value="<?php echo set_value('confirmeSenha'); ?>" required type="password">
                                        <?php echo form_error('confirmeSenha');?>
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
                <p class="text-center text-white">Boom &copy; Bandtec 2018</p>
            </div>
        </footer>
        <!-- Fim Footer -->

    </body>

</html>
