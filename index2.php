<?php
	if (!isset($_SESSION)) session_start();
    
	if (!isset($_SESSION['nome'])) {      
	    session_destroy();
	    header("Location: index.php"); exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">SisLogin</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Usuários
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-usuario">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Categorias
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Tickets
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="#">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="#">Listar</a></li>
	          </ul>
	        </li>

	        
	       </ul>
	   </div>
        <div class="float-end">
        	Olá <?php echo $_SESSION['nome']; ?>
        	<a href="logout.php" class="btn btn-secondary">Sair</a>
        </div>	      
	    
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
					//conexão com banco de dados
					include("config.php");

					//include das páginas
					switch (@$_REQUEST['page']) {
						//usuario
						case 'cadastrar-usuario':
							include('cadastrar-usuario.php');
							break;
						case 'editar-usuario':
							include('editar-usuario.php');
							break;
						case 'listar-usuario':
							include('listar-usuario.php');
							break;
						case 'salvar-usuario':
							include('salvar-usuario.php');
							break;	

						//categoria
						case 'cadastrar-categoria':
							include('cadastrar-categoria.php');
							break;
						case 'editar-categoria':
							include('editar-categoria.php');
							break;
						case 'listar-categoria':
							include('listar-categoria.php');
							break;
						case 'salvar-categoria':
							include('salvar-categoria.php');
							break;

						case 'novo-ticket':
							include('novo-ticket.php');	
						break;
						case 'listar-tickets':
							include('listar-tickets.php');	
						break;				
						default:
							print "<h1>Bem vindo ao clube!</h1>";
					}
				?>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>