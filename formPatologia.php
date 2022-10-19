<?php

    if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];	
     $acaoPat = 'recuperarPatologia';
	 $id=$_GET['id'];

	 require_once 'patologia.controller.php';


	 foreach($patologia as $indice => $patologia){

		$cid=$patologia->cid; 
		$nome=$patologia->nome; 
	 }
	}
	
?>

<h1>Formulário cadastro</h1>
	<div class="row">
		<form class="col s12" action="patologia.controller.php?acaoPat=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="cid" type="text" name="cid" class="validate"value="<?php if(isset($cid)){echo $cid;}else{echo '';}?>">
					<label for="cid">CID</label>
				</div>
				<div class="input-field col s12 m12 l12">
					<input id="nome" type="text" name="nome" class="validate"value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
					<label for="nome">Nome da Doença</label>
				</div>
			</div>
			<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			<input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
		</form>
	</div>