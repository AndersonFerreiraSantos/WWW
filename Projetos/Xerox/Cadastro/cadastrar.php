<?php
session_start();
?>
<!doctype html>	
<html lang="en">
  <head>
  	<title>Cadastrar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">

	</head>
	<body>
    </section>
        <a id="voltar" class="fa fa-long-arrow-left" href="../index.php"></a>
    </section>
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<h3 class="text-center mb-0">cadastrar</h3>
		      	<p class="text-center">Necessário aguardar aprovação</p>
				  <alertas>
					<?php
						if(isset($_SESSION['usuario_existente'])):
					?>
						<div id="danger" class="alert alert-danger" role="alert">
							Este usuário ja está existe
					  	</div>
					<?php
					endif;
						unset($_SESSION['usuario_existente']);
					?>

					<?php
						if(isset($_SESSION['usuario_cadastrado'])):
					?>
						<div id="danger" class="alert alert-success" role="alert">
							Usuário cadastrado com sucesso
					  	</div>
					<?php
					endif;
						unset($_SESSION['usuario_cadastrado']);
					?>


				  </alertas>

						<form action="config_cadastro.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input name="usuario" type="text" class="form-control" placeholder="Usuário" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input name="senha" type="password" class="form-control" placeholder="Senha" required>
	            </div>
                <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-home"></span></div>
	              <input name="filial" type="text" class="form-control" placeholder="Filial" required>
	            </div>
	            <div id="cadastrar"  class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">CADASTRAR</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	
	
	<script>
		function funcao1()
		{
		alert("Eu sou um alert!");
		}
		</script>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

