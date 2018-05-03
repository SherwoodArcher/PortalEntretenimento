<?php $this->load->view('header');?>
        <div>
            <ol class="breadcrumb corPadrao" style="margin: 0px;">
                <li><a href="/">Boom</a></li>
                <li class="active" style="color: #FFF">Cadastro de usuário</li>
            </ol>
        </div>

        <div class="padding10px">            
            <?php 
            $attributes['form'] = ['class' => 'form-horizontal'];
            echo form_open('usuario/novo',$attributes['form']); ?>
                <fieldset>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Cadastro de usuário</h4></div>

                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-11 control-label">                                
                                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                                <div class="col-md-8">
                                    <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                </div>

                                <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
                                <div class="col-md-2">
                                    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                </div>

                                <!-- Multiple Radios (inline) -->

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

                            <!-- Search input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                                <div class="col-md-2">
                                    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                                </div>
                            </div>

                            <!-- Prepended text-->
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


                            <!-- Prepended text-->
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

                            <!-- Text input-->
                            <!-- <div class="form-group">

                                <label class="col-md-2 control-label" for="checkboxes">Preferências</label>
                                <div class="col-md-10"> 
                                    <label class="checkbox-inline" for="checkboxes-0" >
                                        <input name="checkboxes-0" id="checkboxes-0" value="tag0" type="checkbox">
                                        Tag 0
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-1">
                                        <input name="checkboxes-1" id="checkboxes-1" value="tag1" type="checkbox">
                                        Tag 1
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-2">
                                        <input name="checkboxes-2" id="checkboxes-2" value="tag2" type="checkbox">
                                        Tag 2
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-3" >
                                        <input name="checkboxes-3" id="checkboxes-3" value="tag3" type="checkbox">
                                        Tag 3
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-4">
                                        <input name="checkboxes-4" id="checkboxes-4" value="tag4" type="checkbox">
                                        Tag 4
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-5">
                                        <input name="checkboxes-5" id="checkboxes-5" value="tag5" type="checkbox">
                                        Tag 5
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-6" >
                                        <input name="checkboxes-6" id="checkboxes-6" value="tag6" type="checkbox">
                                        Tag 6
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-7">
                                        <input name="checkboxes-7" id="checkboxes-7" value="tag7" type="checkbox">
                                        Tag 7
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-8">
                                        <input name="checkboxes-8" id="checkboxes-8" value="tag8" type="checkbox">
                                        Tag 8
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-9">
                                        <input name="checkboxes-9" id="checkboxes-9" value="tag9" type="checkbox">
                                        Tag 9
                                    </label>                                                                                                
                                </div>
                            </div>

                            
                            <div class="form-group">

                                <label class="col-md-2 control-label" for="checkboxes"></label>
                                <div class="col-md-10"> 
                                    <label class="checkbox-inline" for="checkboxes-0" >
                                        <input name="checkboxes-0" id="checkboxes-0" value="tag0" type="checkbox">
                                        Tag 10
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-1">
                                        <input name="checkboxes-1" id="checkboxes-1" value="tag1" type="checkbox">
                                        Tag 11
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-2">
                                        <input name="checkboxes-2" id="checkboxes-2" value="tag2" type="checkbox">
                                        Tag 12
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-3" >
                                        <input name="checkboxes-3" id="checkboxes-3" value="tag3" type="checkbox">
                                        Tag 13
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-4">
                                        <input name="checkboxes-4" id="checkboxes-4" value="tag4" type="checkbox">
                                        Tag 14
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-5">
                                        <input name="checkboxes-5" id="checkboxes-5" value="tag5" type="checkbox">
                                        Tag 15
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-6" >
                                        <input name="checkboxes-6" id="checkboxes-6" value="tag6" type="checkbox">
                                        Tag 16
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-7">
                                        <input name="checkboxes-7" id="checkboxes-7" value="tag7" type="checkbox">
                                        Tag 17
                                    </label>
                                    <label class="checkbox-inline" for="checkboxes-8">
                                        <input name="checkboxes-8" id="checkboxes-8" value="tag8" type="checkbox">
                                        Tag 18
                                    </label> 
                                    <label class="checkbox-inline" for="checkboxes-9">
                                        <input name="checkboxes-9" id="checkboxes-9" value="tag9" type="checkbox">
                                        Tag 19
                                    </label>                                                                                                
                                </div>
                            </div> -->
                            <!-- Button (Double) -->
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
                <?php echo form_close(); ?>
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
