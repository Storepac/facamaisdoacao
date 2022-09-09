<?php include ('aside.php'); ?>

    <div id="painel_user">
        <h1 class="text-center">Painel do usuário</h1>
            <div class="row">
                <div class="col col-sm-7 col-md-7">
                    <div class="box-painel py-5">
                        <h1 class="blue-color">Aterar dados cadastrados</h1>
                        <div class="container">
                            <div class="box-painel-dados">
                                    <div class="img-perfil">
                                        <img src="images/apae.jpg" alt="">
                                        <span>Apae - Tupã</span>
                                    </div>
                                <div class=" div-painel">
                                    <ul>
                                        <h3>Seus dados</h3>
                                        <li><span>Razão Social:</span> Nme da Instituição</li>
                                        <li><span>Data de funação:</span>10/10/1900</li>
                                        <li><span>Endereço:</span> Rua fulano de tal - bairro -herculândia - SP</li>
                                        <li><span>Telefone:</span> (14)00000-0000</li>
                                        <li><span>Telefone 2:</span> (14)00000-0000</li>
                                        <li><span>e-mail: </span>@email@email.com</li>
                                        <li><span>Chave PIX: </span>00.000.000-00</li>
                                        <li><span>Números de doações:</span> 
                                        <p class="success">Completas: 200</p>
                                        <p class="danger">Canceladas: 20</p>
                                        <p class="warning">Pendentes: 2</p>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-5 col-md-5">
                    <div class="info-right">
                        <form action="#">
                            <div class=" first">
                                <h3>Altere seus dados</h3>
                                    <div class="row division ">
                                        <div class="row firt-division">
                                            <div class="input-field-rigth col">
                                                <label>Endereço</label>
                                                <input type="text" placeholder="Insira seu endereço..." required>
                                            </div>
                                            <div class="input-field-rigth col ">
                                                <label>Bairro</label>
                                                <input type="number" placeholder="Insisra seu bairro" required>
                                            </div>

                                            <div class="input-field-rigth col ">
                                                <label>Cidade</label>
                                                <input type="number" placeholder="Insira sua cidade" required>
                                            </div>

                                            <div class="input-field-rigth col">
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
                                        </div>

                                        <div class="row firt-division">

                                            <div class="input-field-rigth col">
                                                <label>Telefone</label>
                                                <input type="text" placeholder="Número de telefone" id="phone" name="phone"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                                            </div>

                                            <div class="input-field-rigth col ">
                                                <label>Telefone 2</label>
                                                <input type="text" placeholder="Seu número de celular" id="phone" name="phone"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="row division">
                                    <div class="details">
                                    <hr>
                                        <span class="title">Informações de login</span>

                                        <div class="details-row">
                                            <div class="row firt-division">
                                                <div class="input-field-rigth col-12 ">
                                                    <label>E-email</label>
                                                    <input type="text" placeholder="insira seu e-mail" required>
                                                </div>

                                                <div class="input-field-rigth col ">
                                                    <label>Senha</label>
                                                    <input type="password" placeholder="Insira sua senha" required>
                                                </div>

                                                <div class="input-field-rigth col ">
                                                    <label>Confirme sua senha</label>
                                                    <input type="password" placeholder="Confirme sua senha" required>
                                                </div>
                                            </div>
                                            
                                            <div class=" button-division">
                                                <div class="input-field-rigth col  input-wrapper">
                                                    <p>Foto de perfil</p>
                                                    <label for='input-file'> imagem</label>
                                                    <span id='file-name'></span>
                                                    <input type="file"  id='input-file' class="custom-file-input" >
                                                </div>
                                                <div class="input-field-rigth col ">
                                                
                                                </div>
                                                <div class="input-field-rigth col ">
                                                    <button id="CadastroValido" name="CadastroValido"  class="btn">Finalizar alteração</button>

                                                </div>
                                            </div>
                                            
                                    
                                    </div> 
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('footer.php'); ?>