<?php


# Cabeçalho
include 'header.php';

$ref = 'home';

# Conteúdo da página
// if(isset($_SESSION['login'])){
	if(isset($_GET['ref'])){
		$ref = $_GET['ref'];
	}
// }

switch($ref){
	case 'login': include 'views/login.php'; break;
	case 'recuperar-senha': include 'views/recuperar_senha.php'; break;
	case 'instituicao': include 'views/instituicao.php'; break;
	case 'cadastro': include 'views/cadastro.php'; break;
	case 'analise-cadastro': include 'views/analise_cadastro.php'; break;
	case 'nova-senha': include 'views/nova_senha.php'; break;
	case 'perfil-comum': include 'views/perfil_comum.php'; break;
	case 'necessidades': include 'views/necessidades.php'; break;
	case 'repescagem': include 'views/repescagem.php'; break;
    case 'dashboard-backup': include 'views/dashboard.html'; break;
	case 'dashboard': include 'src/views/dashboard.php'; break;
	case 'home2': include 'src/views/home.php'; break;
	case 'tabela_doacao': include 'src/views/table_donation.php'; break;
	case 'doacao': include 'views/doacao.php'; break;
	case 'mensagens': include 'src/views/mensagens.php'; break;
	case 'painel_user': include 'src/views/painel_user.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.html';