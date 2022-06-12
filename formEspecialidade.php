<?php
    if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];	
     $acaoPa = 'recuperarEspecialidade';
	 $id=$_GET['id'];
	 require_once 'especialidade.controller.php';
	 foreach($especialidade as $indice => $especialidade){
		$id=$especialidade->id; 
		$especialidade=$especialidade->especialidade; 
	 }
	}
?>

<h1>Formulário cadastro</h1>
	<div class="row">
		<form class="col s12" action="especialidade.controller.php?acaoEsp=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="especialidade" type="text" name="especialidade" class="validate" value="<?php if(isset($especialidade)){echo $especialidade;}else{echo '';}?>">
					<label for="especialidade">Especialidade</label>
				</div>
			</div>
			<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			<input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
		</form>
	</div>