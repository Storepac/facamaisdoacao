<?php include('menu.php'); ?>
    <section id="cadastro">
        <div class="container-cadastro">
            <div class=" text-center ">
                <h1 class="blue-color">Cadastre-se para começar a doar.</h1>
            </div>
            <form action="#">
                <div class="fields">
                    <div class="input-field">
                        <label>Tipo de pessoa</label>
                        <select id="tipo_usuario" name="tipo_usuario" >
                        <option value="f">Física</option>
                        <option value="j">Jurídica</option>
    		            </select>
                    </div>
                </div>
                <div class="form first">
                    <div class="details personal">
                        <div class="fields">
                           
                            <div class="input-field nome">
                                <label for="nome">Nome completo</label>
                                <input type="text" id="nome" name="nome" placeholder="Insira seu nome completo..." >
                            </div>
                            <div class="input-field documento">
                                <label for="documento">Registro de documento</label>
                                <input type="text" id="RegraValida" maxlength="14" name="RegraValida" placeholder="Insira seu CPF..." onkeydown="javascript: fMasc( this, mCPF );" required>
                            </div>
                            
                            <div class="input-field">
                                <label>Endereço</label>
                                <input type="text" placeholder="Insira seu endereço..." required>
                            </div>

                            <div class="input-field">
                                <label>Bairro</label>
                                <input type="text" placeholder="Insisra seu bairro" required>
                            </div>

                            <div class="input-field">
                                <label>Cidade</label>
                                <input type="text" placeholder="Insira sua cidade" required>
                            </div>

                            <div class="input-field">
                                <label>Estado</label>
                                <select required>
                                    <option disabled selected>Selecione seu estado</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>

                            <div class="input-field nascimento">
                                <label for="nascimento">Data de nasc.</label>
                                <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Sua data de nascimento..." required>
                            </div>

                            <div class="input-field">
                                <label>Telefone</label>
                                <input type="text" placeholder="Número de telefone" id="phone" name="phone"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                            </div>

                            <div class="input-field celular">
                                <label for="celular">Celular</label>
                                <input type="text" placeholder="Seu número de celular" id="celular" name="celular"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required>
                            </div>
                        </div>
                    </div>

                    <div class="details ID">
                        <span class="title">Informações de login</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>E-email</label>
                                <input type="text" placeholder="insira seu e-mail" required>
                            </div>

                            <div class="input-field">
                                <label>Senha</label>
                                <input type="password" placeholder="Insira sua senha" required>
                                <span style="font-size: 12px;">Pelo menos 8 caracteres e 1 dígito</span>
                            </div>

                            <div class="input-field">
                                <label>Confirme sua senha</label>
                                <input type="password" placeholder="Confirme sua senha" required>
                            </div>
                            
                            <div class="input-field input-wrapper">
                                <p>Foto de perfil</p>
                                <label for='input-file'>Selecionar uma imagem</label>
                                <span id='file-name'></span>
                                <input type="file"  id='input-file' class="custom-file-input" >
                            </div>
                            <div class="input-field valida_cpf">
                                <label for="valida_cpf">Validar CPF</label>
                                <input type="submit" class="btn-blue" style="max-width: 280px;"  value="Validar CPF" onclick="ValidaCPF();">
                            </div>
                            <div class="input-field">
                                <label for="">Finalize seu cadastro</label>
                                <button id="CadastroValido" name="CadastroValido" style="max-width: 280px;">Cadastre-se</button>

                            </div>
                            
                       
                    </div> 
                </div>

            </form>
        </div>
    </section>