<?php
require_once 'conexao/conexao.php'; 
require_once 'model/especialidade.model.php'; 
require_once 'service/especialidade.service.php'; 

@$acaoEsp = isset($_GET['acaoEsp'])?$_GET['acaoEsp']:$acaoEsp;
@$id = isset($_GET['id'])?$_GET['id']:$id;


if($acaoEsp=='inserir'){
	$especialidade = new Especialidade();
	$especialidade->__set('nome',$_POST['nome']);

	$conexao = new Conexao();
	
	$especialidadeService = new especialidadeService($especialidade, $conexao);
	$especialidadeService->inserir();
	header('location: index.php?link=3');
}else if($acaoEsp=='recuperar'){
	$especialidade = new Especialidade();
	$conexao = new Conexao();
	
	$especialidadeService = new EspecialidadeService($especialidade, $conexao);
	$especialidade = $especialidadeService->recuperar();

}else if($acaoEsp=='recuperarEspecialidade'){
	$especialidade = new Especialidade();
	$conexao = new Conexao();
	
	$especialidadeService = new EspecialidadeService($especialidade, $conexao);
	$especialidade = $especialidadeService->recuperarespecialidade($id);
	
}else if($acaoEsp=='alterar'){
	$especialidade = new Especialidade();
	$especialidade->__set('nome',$_POST['nome']);
	$especialidade->__set('id', $_POST['id']);

	$conexao = new Conexao();
	
	$especialidadeService = new EspecialidadeService($especialidade, $conexao);
	$especialidadeService->alterar();
	header('location: index.php?link=3');

}else if($acaoEsp=='remover'){
	$especialidade = new Especialidade();
	$especialidade->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$especialidadeService = new EspecialidadeService($especialidade, $conexao);
	$especialidadeService->remover();
	header('location: index.php?link=3');
}

?>