<?php include('menu.php'); ?>
<div class="container_dash">
        <aside>
            <div class="top">
                <div class="logo">
                     <a href="?ref=perfil-comum" class="">Perfil: <span>nome usuarios</span></a>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp"> close</span>
                </div>
            </div>
                <div id="perfil-edit"  class="sidebar">
                    <div class="card">
                            <div class="img-perfil">
                                <img src="images/idosos.jpg" alt="">
                            </div>
                        <form action="#">
                            <div class="">
                                <div class="perfil">
                                    <label for="nome">Nome completo:</label>
                                    <input type="text" id="nome" name="nome" placeholder="Novo nome...">
                                </div>
                                                               
                                <div class="perfil">
                                    <label>Endereço:</label>
                                    <input type="text" placeholder="Novo endereço..." required="">
                                </div>

                                <div class="perfil">
                                    <label>Bairro:</label>
                                    <input type="text" placeholder="novo bairro" required="">
                                </div>

                                <div class="perfil">
                                    <label>Cidade:</label>
                                    <input type="text" placeholder="Nova cidade" required="">
                                </div>

                                <div class="perfil">
                                    <label>Estado:</label>
                                    <select required="">
                                        <option disabled="" selected="">Selecione seu estado</option>
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

                                <div class="perfil">
                                    <label for="nascimento">Data de nasc.:</label>
                                    <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Nova data de nascimento..." required="">
                                </div>

                                <div class="perfil">
                                    <label>Telefone:</label>
                                    <input type="text" placeholder="Novo número de telefone" id="phone" name="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                                </div>

                                <div class="perfil">
                                    <label for="celular">Celular:</label>
                                    <input type="text" placeholder="Novo número de celular" id="celular" name="celular" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required="">
                                </div>
                            </div>
                            <div class="details ID">
                                <span class="title">Informações de login</span>

                                <div class="">
                                    <div class="perfil">
                                        <label>Senha:</label>
                                        <input type="password" placeholder="Insira sua senha" required="">
                                    </div>

                                    <div class="perfil">
                                        <label>Confirme sua senha:</label>
                                        <input type="password" placeholder="Confirme sua senha" required="">
                                    </div>
                                    
                                    <div class="perfil input-wrapper">
                                        <p>Foto de perfil:</p>
                                        <label for="input-file">Selecionar uma imagem</label>
                                        <span id="file-name"></span>
                                        <input type="file" id="input-file" class="custom-file-input">
                                    </div>
                                    <div class="perfil">
                                        <button class="btn-green" id="" name="" style="max-width: 280px;">Alterar Dados</button>
                                    </div>
                            
                            </div> 
                        </form>
                    </div>
                </div>
        </aside>
         <main>
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
            <div class="main-perfil">
                <div class="main-card-perfil">
                    <div class="card-body">
                        <div class="card-perfil">
                        <h3>Nome:</h3>
                        <span>Maria do José Ferreira</span>
                        <h3>Número de registro:</h3>
                        <span>00.000.000-5</span>
                        <h3>Endereço:</h3>
                        <span>Avenida do rosário - Centro - Herculândia - SP</span>
                        <h3>Data de nascimento:</h3>
                        <span>20/10/1990</span>
                        <h3>Contato:</h3>
                        <span>14 3486-1525 - 14 99614-5415</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="insights py-5">
    <div class="sales">
        <span class="material-icons-sharp">analytics</span>
        <div class="middle">
            <div class="left">
                <h3>Doações concluidas</h3>
                <h1>25,025</h1>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                    <p>
                        81%
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- final  sales-->
    <div class="income">
        <span class="material-icons-sharp">bar_chart</span>
        <div class="middle">
            <div class="left">
                <h3>Doações Confirmadas (income)</h3>
                <h1>300.05</h1>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                    <p>
                        60%
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- final  income-->
    <div class="pendentes">
        <span class="material-icons-sharp">stacked_line_chart</span>
        <div class="middle">
            <div class="left">
                <h3>Doações Pendentes</h3>
                <h1>205</h1>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                    <p>
                        45%
                    </p>
                </div>
            </div>
        </div>
       
    </div>
    <!-- final  pendentes-->
</div>
        </main>
        </div>