<?php
require_once 'conexao/conexao.php'; 
require_once 'model/paciente.model.php'; 
require_once 'service/paciente.service.php'; 

@$acaoPa = isset($_GET['acaoPa'])?$_GET['acaoPa']:$acaoPa;
@$id = isset($_GET['id'])?$_GET['id']:$id;

if($acaoPa=='inserir'){
	$paciente = new Paciente();
	$paciente->__set('nome',$_POST['nome']);
	$paciente->__set('endereco',$_POST['endereco']);
	$paciente->__set('cpf',$_POST['cpf']);
	
	$conexao = new Conexao();
	
	$pacienteService = new PacienteService($paciente, $conexao);
	$pacienteService->inserir();
	header('location: index.php?link=3');
}else if($acaoPa=='recuperar'){
	$paciente = new Paciente();
	$conexao = new Conexao();
	
	$pacienteService = new PacienteService($paciente, $conexao);
	$paciente = $pacienteService->recuperar();

}else if($acaoPa=='recuperarPaciente'){
	$paciente = new Paciente();
	$conexao = new Conexao();
	
	$pacienteService = new PacienteService($paciente, $conexao);
	$paciente = $pacienteService->recuperarPaciente($id);
	
}else if($acaoPa=='alterar'){
	$paciente = new Paciente();
	$paciente->__set('nome',$_POST['nome']);
	$paciente->__set('endereco',$_POST['endereco']);
	$paciente->__set('cpf',$_POST['cpf']);
    $paciente->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$pacienteService = new PacienteService($paciente, $conexao);
	$pacienteService->alterar();
	header('location: index.php?link=3');
}else if($acaoPa=='remover'){
	$paciente = new Paciente();
	$paciente->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$pacienteService = new PacienteService($paciente, $conexao);
	$pacienteService->remover();
	header('location: index.php?link=3');
}

?>