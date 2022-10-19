<?php
require_once 'conexao/conexao.php'; 
require_once 'model/medico.model.php'; 
require_once 'service/medico.service.php'; 

@$acao = isset($_GET['acao'])?$_GET['acao']:$acao;
@$id = isset($_GET['id'])?$_GET['id']:$id;

if($acao=='inserir'){
	$medico = new Medico();
	$medico->__set('nome',$_POST['nome']);
	$medico->__set('email',$_POST['email']);
	$medico->__set('senha',$_POST['senha']);
	$medico->__set('imagem',$_FILES['imagem']);

	$conexao = new Conexao();
	
	$medicoService = new MedicoService($medico, $conexao);
	$medicoService->inserir();
	header('location: index.php?link=3');
	
}else if($acao=='recuperar'){
	$medico = new Medico();
	$conexao = new Conexao();
	
	$medicoService = new MedicoService($medico, $conexao);
	$medico = $medicoService->recuperar();

}else if($acao=='recuperarMedico'){
	$medico = new Medico();
	$conexao = new Conexao();
	
	$medicoService = new MedicoService($medico, $conexao);
	$medico = $medicoService->recuperarMedico($id);
	
}else if($acao=='alterar'){
	$medico = new Medico();
	$medico->__set('nome',$_POST['nome']);
	$medico->__set('email',$_POST['email']);
	$medico->__set('senha',$_POST['senha']);
	$medico->__set('id',$_POST['id']);

	if ($__FILES['imagem']['name'] != '')
	{
		$medico->__set('imagem',$_FILES['imagem']['name']);
	} else
	{
		$medico->__set('imagem', $_SESSION['imagem']);
	}
	
	$conexao = new Conexao();
	
	$medicoService = new MedicoService($medico, $conexao);
	$medicoService->alterar();
	header('location: index.php?link=3');
}else if($acao=='remover'){
	$medico = new Medico();
	$medico->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$medicoService = new MedicoService($medico, $conexao);
	$medicoService->remover();
	header('location: index.php?link=3');

}else if($acao == 'recuperarLogin'){
		$medico = new Medico();
		$conexao = new Conexao();
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$medicoService = new MedicoService($medico, $conexao);
		$medico= $medicoService->recuperarLogin($email, $senha);
		
		 foreach($medico as $indice => $med){
			
		 }
		if(!isset($med->email)){
			echo '
				
				<script>alert("Médico com email desconhecido");</script>
				<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php?link=6">
			';
		}else{
			$_SESSION['medicoLogado']=$med->nome;
			$_SESSION['emailLogado']=$med->email;
			$_SESSION['idLogado']=$med->id;
			header('location: index.php');
		}
	}else if($acao == 'sair'){
		session_destroy();
		header('location: index.php');
	}
?>