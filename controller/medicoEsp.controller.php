<?php
require_once 'conexao/conexao.php'; 
<<<<<<< HEAD
require_once 'model/medicoEsp.model.php'; 
require_once 'service/medicoEsp.service.php'; 
=======
require_once 'model/especialidade.model.php'; 
require_once 'service/especialidade.service.php'; 
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9

@$acaoMedEsp = isset($_GET['acaoMedEsp'])?$_GET['acaoMedEsp']:$acaoMedEsp;
@$id = isset($_GET['id'])?$_GET['id']:$id;

if($acaoMedEsp=='inserir'){
	$medicoEsp = new MedicoEsp();
<<<<<<< HEAD
	$medicoEsp->__set('id_medico',$_POST['medico']);
	$medicoEsp->__set('id_especialidade',$_POST['especialidade']);
=======
	$medicoEsp->__set('nome',$_POST['nome']);
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9

	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEspService->inserir();
<<<<<<< HEAD
    header('location: index.php?link=3');
	
=======
	header('location: index.php?link=3'); 
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
}else if($acaoMedEsp=='recuperar'){
	$medicoEsp = new MedicoEsp();
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEsp = $medicoEspService->recuperar();

}else if($acaoMedEsp=='recuperarMedicoEsp'){
	$medicoEsp = new MedicoEsp();
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
<<<<<<< HEAD
	$medicoEsp = $medicoEspService->recuperarMededicoEsp($id);
	
}else if($acaoMedEsp=='alterar'){
	$medicoEsp = new MedicoEsp();
	$medicoEsp->__set('id_medico',$_POST['medico']);
	$medicoEsp->__set('id_especialidade',$_POST['especialidade']);
	$medicoEsp->__set('id', $_POST['id']);
     
=======
	$medicoEsp = $medicoEspService->recuperarespecialidade($id);
	
}else if($acaoMedEsp=='alterar'){
	$medicoEsp = new MedicoEsp();
	$medicoEsp->__set('id_medico',$_POST['id_medico']);
    $medicoEsp->__set('id_especialidade',$_POST['id_especialidade']);
	$medicoEsp->__set('id', $_POST['id']); 

>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
	$conexao = new Conexao();
	
	$medicoEspService = new MedicoEspService($medicoEsp, $conexao);
	$medicoEspService->alterar();
<<<<<<< HEAD

=======
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
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