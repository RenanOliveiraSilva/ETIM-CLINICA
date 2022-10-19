<?php
require_once 'conexao/conexao.php'; 
require_once 'model/patologia.model.php'; 
require_once 'service/patologia.service.php'; 

@$acaoPat = isset($_GET['acaoPat'])?$_GET['acaoPat']:$acaoPat;
@$id = isset($_GET['id'])?$_GET['id']:$id;


if($acaoPat=='inserir'){
	$patologia = new Patologia();

	$patologia->__set('cid',$_POST['cid']);
	$patologia->__set('nome',$_POST['nome']);

	$conexao = new Conexao();
	
	$patologiaService = new patologiaService($patologia, $conexao);
	$patologiaService->inserir();
	header('location: index.php?link=3');
}else if($acaoPat=='recuperar'){
	$patologia = new Patologia();
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologia = $patologiaService->recuperar();

}else if($acaoPat=='recuperarPatologia'){
	$patologia = new Patologia();
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologia = $patologiaService->recuperarPatologia($id);
	
}else if($acaoPat=='alterar'){
	$patologia = new Patologia();
	$patologia->__set('cid',$_POST['cid']);
	$patologia->__set('nome',$_POST['nome']);
	$patologia->__set('id', $_POST['id']);

	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologiaService->alterar();
	header('location: index.php?link=3');

}else if($acaoPat=='remover'){
	$patologia = new Patologia();

	$patologia->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologiaService->remover();

	header('location: index.php?link=3');
}

?>