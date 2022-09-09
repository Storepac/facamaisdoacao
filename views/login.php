<?php include('menu.php'); ?>

    <section id="login">
        <div class="contato py-5">
            <div class="container">
                <div class="card">
                <div class="text-center py-3">
                            <a href="" class="logo ">Faça mais <span>doação</span></a>
                        </div>
                    <div class="card-body ">
                            <div class="text-center ">
                                <h1 class="blue-color">Faça seu login ou cadastre-se</h1>
                            </div>
                        
                        <form class="form-login" role="form" method="post">
                            <div class="row">
                                <label for="">Login</label>
                                <input type="text" name="usuario" id="usuario" class="login-form-field" placeholder="email ou CPF">
                                <label for="">Senha</label>
                                <input type="password" name="senha" id="senha" class="login-form-field" placeholder="Sua senha...">   
                            </div>
                            <div class="forgot-user">
                                <a href="?ref=recuperar-senha"><p>Esqueceu seu e-mail ou senha? <span class="success">Recupere</span></p></a>
                            </div>
                            <div class="text-center button-login">
                                <a href="?ref=cadastro" class="btn-blue" ><i class="fa-solid fa-user-pen"></i>&nbsp;Cadastro</a>
                                <button class="btn-green" id="form-submit"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
