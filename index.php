<?php
<<<<<<< HEAD
session_start();
?>
=======
	session_start();
?>


>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
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
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <?php if(isset($_SESSION['medicoLogado'])){?>
	    <li><a href="index.php?link=2">Médico</a></li>
        <li><a href="index.php?link=5">Especialidade</a></li>
        <li><a href="index.php?link=4">Paciente</a></li>
        <li><a href="index.php?link=11">Patologia</a></li>
        <li><a href="index.php?link=3">Restrita</a></li>
        <li><a href="index.php?link=7&acao=sair"><?= $_SESSION['medicoLogado'] ?></a></li>
	   <?php }else{?>
		<li><a href="index.php?link=6">Entrar</a></li>
	   <?php }?>
      </ul>
    </div>
  </nav>
	<!--dinamico -->
	<nav>
    <div class="nav-wrapper purple">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if(isset($_SESSION['medicoLogado'])){?>
        <li><a href="index.php?link=2">Médico</a></li>
        <li><a href="index.php?link=5">Especialidade</a></li>
        <li><a href="index.php?link=4">Paciente</a></li>
        <li><a href="index.php?link=3">Restrita</a></li>
        <li><a href="index.php?link=7&acao=sair"><?= $_SESSION['medicoLogado'] ?></a></li>
          <?php } else{?>
        <li><a href="index.php?link=6">Entrar</a></li>
            <?php }?>
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
<<<<<<< HEAD
			$pag[5]='formEspecialidade.php';			
			$pag[6]='formLoginMedico.php';	
			$pag[7]='medico.controller.php';	
			$pag[8]='formMedicoEsp.php';	
			$pag[9]='medicoEsp.controller.php';	
			$pag[10]='formMedicoEsp2.php';
      $pag[11]='formPatologia.php';	
			
=======
			$pag[5]='formEspecialidade.php';
			$pag[6]='formLoginMedico.php';	
			$pag[7]='medico.controller.php';	
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
			
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}
		}else{
			trim(include 'principal.php');
		}
		
	 ?>
	</div>
<<<<<<< HEAD
	
	<footer class="page-footer">
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
=======

		<footer class="page-footer purple">
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

>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script>
		 $(document).ready(function() {
			$('select').material_select();
		  });
	  </script>
    </body>
  </html>