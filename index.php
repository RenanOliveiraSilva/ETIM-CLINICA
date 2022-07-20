<?php
	session_start();
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>




    </head>
		
    <body>
	<!--dinamico -->
	<nav>
		<div class="nav-wrapper blue">
		<a href="#" class="brand-logo">Logo</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="index.php?link=2">Médico</a></li>
			<li><a href="index.php?link=5">Especialidade</a></li>
			<li><a href="index.php?link=4">Paciente</a></li>
			<li><a href="index.php?link=3">Restrita</a></li>
			<li><a href="index.php?link=6">Entrar</a></li>
		</ul>
		</div>
	</nav>

	<div class="container">

		<?php
		
			$link = @$_GET['link'];
			$pag[1]='principal.php';
			$pag[2]='formMedico.php';
			$pag[3]='areaRestritaAdm.php';
			$pag[4]='formPaciente.php';
			$pag[5]='formEspecialidade.php';
			$pag[6]='formLoginMedico.php';	
			$pag[7]='medico.controller.php';	
			
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}
		}else{
			trim(include 'principal.php');
		}
		
		?>
	</div>

		<footer class="page-footer blue">
			<div class="container">
				<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
					<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
			</footer>

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>