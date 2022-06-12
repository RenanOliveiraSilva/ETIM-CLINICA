<?php
    if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];	
     $acaoPa = 'recuperarPaciente';
	 $id=$_GET['id'];
	 require_once 'paciente.controller.php';
	 foreach($paciente as $indice => $paciente){
		$id=$paciente->id; 
		$nome=$paciente->nome; 
		$endereco=$paciente->endereco; 
		$cpf=$paciente->cpf; 
	 }
	}
?>

<h1>Formulário cadastro</h1>
	<div class="row">
		<form class="col s12" action="paciente.controller.php?acaoPa=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="nome" type="text" name="nome" class="validate" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
					<label for="nome">Nome</label>
				</div>
			</div>
			<div class="row">
			<div class="input-field col s6 m6 l6">
				<input id="endereco" type="text" name="endereco" class="validate" value="<?php if(isset($endereco)){echo $endereco;}else{echo '';}?>">
				<label for="endereco">Endereço</label>
			</div>
			<div class="input-field col s6 m6 l6">
				<input id="cpf" type="text" name="cpf" class="validate" value="<?php if(isset($cpf)){echo $cpf;}else{echo '';}?>">
				<label for="cpf">CPF</label>
			</div>
			</div>
			<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			<input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
		</form>
	</div>