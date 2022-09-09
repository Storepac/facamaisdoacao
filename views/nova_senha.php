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
                                <h1 class="blue-color">Digite sua nova senha.</h1>
                            </div>
                        
                        <form class="form-login" role="form" method="post">
                            <div class="row">
                                <label for="">Nova senha</label>
                                <span style="font-size: 12px;">Pelo menos 8 caracteres e 1 dígito</span>
                                <input type="text" name="nova-senha" id="nova-senha" class="login-form-field" placeholder="Digite sua nova senha...">
                                
                                <label for="">Repita a nova senha</label>
                                <input type="text" name="confirma-nova-senha" id="confirma-nova-senha" class="login-form-field" placeholder="Confirme sua nova senha...">
                            </div>
                            <div class="text-center button-login">
                            
                                <button class="btn-green" id="form-submit"><i class="fa-solid fa-key"></i>&nbsp;Redefinir senha</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
