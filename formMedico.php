<?php
    if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];	
     $acao = 'recuperarMedico';
	 $id=$_GET['id'];
	 require_once 'medico.controller.php';
	 foreach($medico as $indice => $medico){
		$id=$medico->id; 
		$nome=$medico->nome; 
		$email=$medico->email; 
		$senha=$medico->senha; 
		$imagem=$medico->imagem;
		$_SESSION['imagem']=$imagem;
	 }
	}
?>
<h1>Formulário cadastro</h1>
		 <div class="row">
			<form class="col s12" action="medico.controller.php?acao=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			  <div class="row">
				<div class="input-field col s12 m12 l12">
				  <input id="nome" type="text" name="nome" class="validate" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
				  <label for="nome">Nome</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6 m6 l6">
				  <input id="email" type="email" name="email" class="validate" value="<?php if(isset($email)){echo $email;}else{echo '';}?>">
				  <label for="email">E-mail</label>
				</div>
			 	<div class="input-field col s6 m6 l6">
				  <input id="senha" type="password" name="senha" class="validate" value="<?php if(isset($senha)){echo $senha;}else{echo '';}?>">
				  <label for="senha">Senha</label>
				</div>
				<div class="input-field col s6 m6 l6">
				  <input id="imagem" type="file" name="imagem" class="validate" value="<?php if(isset($imagem)){echo $imagem;}else{echo '';}?>">
				  <label for="imagem">Foto</label>
				</div>
				<?php
					if (isset($medico->imagem))
					{
						echo '<img scr="imagem/'.$medico->imagem.'" width="100" height="100">';
					}
				?>
			  </div>
			  <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			  <input type="hidden" name="id_esp">
			  <input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
			</form>
		</div>