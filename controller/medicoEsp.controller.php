<?php
require_once 'conexao/conexao.php'; 
require_once 'model/especialidade.model.php'; 
require_once 'service/especialidade.service.php'; 

@$acaoMedEsp = isset($_GET['acaoMedEsp'])?$_GET['acaoMedEsp']:$acaoMedEsp;
@$id = isset($_GET['id'])?$_GET['id']:$id;

if($acaoMedEsp=='inserir'){
	$medicoEsp = new MedicoEsp();
	$medicoEsp->__set('nome',$_POST['nome']);

	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEspService->inserir();
	header('location: index.php?link=3'); 
}else if($acaoMedEsp=='recuperar'){
	$medicoEsp = new MedicoEsp();
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEsp = $medicoEspService->recuperar();

}else if($acaoMedEsp=='recuperarMedicoEsp'){
	$medicoEsp = new MedicoEsp();
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEsp = $medicoEspService->recuperarespecialidade($id);
	
}else if($acaoMedEsp=='alterar'){
	$medicoEsp = new MedicoEsp();
	$medicoEsp->__set('id_medico',$_POST['id_medico']);
    $medicoEsp->__set('id_especialidade',$_POST['id_especialidade']);
	$medicoEsp->__set('id', $_POST['id']); 

	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEspService->alterar();
	header('location: index.php?link=3');

}else if($acaoMedEsp=='remover'){
	$medicoEsp = new MedicoEsp();
	$medicoEsp->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEspService->remover();
	header('location: index.php?link=3');
}

?>