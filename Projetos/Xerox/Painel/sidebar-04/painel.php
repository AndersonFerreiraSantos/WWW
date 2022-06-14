<?php 
session_start();
include('../../banco.php');
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>XEROX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
        
	  		<h1><a href="painel.php" class="logo">HOME</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="painel.php?painel=filiais"><span class="fa fa-home mr-3"></span> Filiais</a>
          </li>
          <li class="active">
            <a href="painel.php?painel=impressoras"><span class="fa fa-print mr-3"></span> Impressoras</a>
          </li>
          <li class="active">
              <a href="painel.php?painel=toners"><span class="fa fa-user mr-3"></span> Toners</a>
          </li>
          <li>
            <a href="painel.php?painel=suprimetos"><span class="fa fa-sticky-note mr-3"></span> Suprimentos</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
        
      <div id="content" class="p-4 p-md-5 pt-5">
        <?php $nav = $_GET['painel'];
         if($nav == "filiais"){
           include('filiais.php');
         }elseif($_GET['painel'] == "impressoras"){
           include('impressoras.php');
         }elseif($_GET['painel'] == "toners"){
          include('toners.php');
        }; ?>
		</div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>