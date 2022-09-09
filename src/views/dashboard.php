
 <?php include('aside.php'); ?>

            <div id="abrirModal" class="modal-necessidade">
                <a href="#fechar" title="Fechar" class="fechar-necessidade">x</a>
                <form action=""  >
                    <div class="container">
                        <div class=" modal-box">
                            <h2>Nome:</h2>
                            <span>Maria jojé dos campos</span>
                            <h2>WhatsApp:</h2>
                            <span>14 00000-0000</span>
                            <h2>E-mail:</h2>
                            <span>email@email.com</span>
                            <br>
                                <h3>Entre em contato via WhatsApp</h3>
                                <a href="#" class="btn-green"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;WhatsApp</a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="abrirModal-edit" class="modal-necessidade">
                <a href="#fechar" title="Fechar" class="fechar-necessidade">x</a>
                <form action=""  >
                    <div class="container">
                        <div class=" modal-box">
                        <script>
                                var select = document.getElementById('mySelect');
                                    select.onchange = function () {
                                        select.className = this.options[this.selectedIndex].className;
                                    }
                            </script>
                            <select name="" id=" mySelect">
                                <option value="pendente" class="warning">Pendente</option>
                                <option value="cancelada" class="danger">Cancelada</option>
                                <option value="completa" class="success">Completa</option>
                            </select>
                           
                            <a href="" class="btn">Ok</a>
                        </div>
                    </div>
                </form>
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
        <small class="txt-muted">
            Last 24 horas
        </small>
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
        <small class="txt-muted">
            Last 24 horas
        </small>
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
        <small class="txt-muted">
            Last 24 horas
        </small>
    </div>
    <!-- final  pendentes-->
</div>
<!-- final  insights-->
<div class="">
                <div class="container">
                    <div class="max-table">
                        <div class="recent-orders">
                                <h2>Doações Recentes</h2>
                                <div class="borde-table">
                                    <table class="fl-table">
                                            <thead>
                                                <tr>
                                                    <th>Id doação</th>
                                                    <th>Nome do doador</th>
                                                    <th>Numero identificação</th>
                                                    <th>Doação</th>
                                                    <th>Status</th>
                                                    <th>Detalhes</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                        
                                            <tr>
                                                <td>1000</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="danger">Cacelada</td>
                                                <td class="primary">
                                                <a href="#abrirModal-edit" title="Editar status"><span class="material-icons-sharp">edit</span></a>
                                                <a href="" title="Deletar doação"><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal" title="Informação do doador"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>100</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="warning">Pendente</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>234</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href="" ><span class="material-icons-sharp" >edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="warning">Pendente</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="danger">Cancelada</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="success">Completa</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Anderson de Oliveira</td>
                                                <td>000.000.000-00</td>
                                                <td>Detergente</td>
                                                <td class="danger">Cancelada</td>
                                                <td class="primary">
                                                <a href=""><span class="material-icons-sharp">edit</span></a>
                                                <a href=""><span class="material-icons-sharp">delete</span></a>
                                                <a href="#abrirModal"><span class="material-icons-sharp">info</span></a>
                                                
                                                </td>
                                            </tr>
                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
    <div class="recent-updates py-4">
    <h2>Últimas atualizações</h2>
    <div class="updates">
        <div class="update">
            <div class="profile-photo">
                <img src="images/cinza_logo.png" alt="">
            </div>
            <div class="message">
                <p><b>Anderson</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima necessitatibus consequatur dicta veritatis in expedita illum nulla tempore soluta harum. Saepe repellat sunt nostrum commodi, cum eum eaque impedit tempore earum voluptatem veniam perspiciatis atque corrupti, quibusdam at labore facilis!</p>
                <small class="text-muted">
                    2 Minutos atrás
                </small>
            </div>
        </div>
        <div class="update">
            <div class="profile-photo">
                <img src="images/apae.jpg" alt="">
            </div>
            <div class="message">
                <p><b>José Maria</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima necessitatibus consequatur dicta veritatis in expedita illum nulla tempore soluta harum. Saepe repellat sunt nostrum commodi, cum eum eaque impedit tempore earum voluptatem veniam perspiciatis atque corrupti, quibusdam at labore facilis!</p>
                <small class="text-muted">
                    2 Minutos atrás
                </small>
            </div>
        </div>
        <div class="update">
            <div class="profile-photo">
                <img src="images/statupa.jpg" alt="">
            </div>
            <div class="message">
                <p><b>Maria José</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima necessitatibus consequatur dicta veritatis in expedita illum nulla tempore soluta harum. Saepe repellat sunt nostrum commodi, cum eum eaque impedit tempore earum voluptatem veniam perspiciatis atque corrupti, quibusdam at labore facilis!</p>
                <small class="text-muted">
                    2 Minutos atrás
                </small>
            </div>
        </div>
    </div>
</div>
-->

<?php include('footer.php'); ?>