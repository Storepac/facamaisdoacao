
<?php include('header-instituicao.php'); ?>

<div class="container py-5" >

    <div class="container">
            <div id="abrirModal" class="modal">
            <a href="#fechar" title="Fechar" class="fechar">x</a>
                <form action="" id="cadastra_doacao" >
                    <div class="container">
                        <div class=" doacao_box">
                            <div class="row">
                                <div class="form-group col">
                                    <label class=" col-form-label">Nome da doação</label>
                                    <div class="">
                                        <input id="input_doacao_nome" class="form-control" type="text"/>
                                    </div>
                                </div>
                                    <div class="form-group col">
                                        <label for="exampleFormControlTextarea1">Breve descrição</label>
                                        <textarea id="input_doacao_descricao" class="form-control" rows="3"></textarea>
                                    </div>
                                

                            </div>
                            <div class="row">
                                <div class="form-group col col-sm-6 col-md-3">
                                    <label class=" col-form-label">Quantidade</label>
                                    <div>
                                        <input id="input_doacao_quantidade" class="form-control" type="number" value="42">
                                    </div>
                                </div>
                                <div class="form-group col col-sm-6 col-md-3">
                                    <label class=" col-form-label">Categoria</label>
                                    <select name="country" class="form-select" required="">
                                        <option>Alimentos</option>
                                        <option>Livros</option>
                                        <option>Unidades</option>
                                    </select>
                                </div>
                                <div class="form-group col col-sm-6 col-md-3">
                                    <label class=" col-form-label">Tipo</label>
                                    <select name="country" class="form-select" required="">
                                        <option>Quilos</option>
                                        <option>Litros</option>
                                        <option>Unidades</option>
                                    </select>
                                </div>
                                <div class="form-group col col-sm-6 col-md-3">
                                    <label class="d-block col-form-label">Imagens dos produtos</label>
                                    <div class="input-field input-file-modal">
                                        <p>Foto de perfil</p>
                                        <label for='input-file'>Fotos</label>
                                        <span id='file-name'></span>
                                        <input type="file"  id='input-file' class="custom-file-input" >
                                    </div>
                                    <!-- end: File preview template -->
                                </div>
                            </div>

                           <div class="modal-btn">
                           <a id="btnDoar" class="btn-modal" href="#">Doar</a>
                           </div>
                        </div>
                    </div>
                </form>
            </div>

        <div class=" text-center text-doacao ">
            <h1>Comece a doar</h1>
            <p> Aqui contêm a categoria dos itens que podem ser doados para as
                    Instituições</p>
        </div>
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao categorias">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/alimento.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Alimentos</h4>
                                <p class="card-text">Faça doação de qualquer tipo de alimento que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao ">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/brinquedo.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Brinquedos</h4>
                                <p class="card-text">Faça doação de qualquer tipo de brinquedo que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/construcao.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Materiais de construção</h4>
                                <p class="card-text">doação de qualquer tipo de material de construção</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/eletrodomestico.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Eletrodomesticos</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/eletronico.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Eletrônicos</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/higienepessoal.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Higiene pessoal</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/limpeza.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Produtos de Limpeza</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/livros.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Livros</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/roupas.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Roupas</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/sapato.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Calçados</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/sofa.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Móveis</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ">
                        <div class="card_doacao">
                            <img class="icon-svg categorias"
                                 src="assets/categorias/svg/svg-b/outros.svg"
                                 alt="Card image cap ">
                            <div class="card-doacao-body   ">
                                <h4 >Outros</h4>
                                <p class="card-text">Faça doação de qualquer tipo de serviço que a Instituição
                                    precise</p>
                                <a  class="btn btn-block text-center btn-warning"
                                    href="#abrirModal">Doar</a>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
</div>