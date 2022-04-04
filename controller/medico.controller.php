<?php

    require_once 'conexao/conexao.php';
    require_once 'model/medico.model.php';
    require_once 'service/medico.service.php';

    @$acao = isset($_GET['acao']) ? $_GET['acao']:$acao;
 

    if ($acao == 'inserir') {
        $medico = new Medico();
        $medico->__set('nome', $_POST['nome']);
        $medico->__set('email', $_POST['email']);
        $medico->__set('senha', $_POST['senha']);

        $conexao = new Conexao();

        $medicoService = new MedicoService($medico, $conexao);
        $medicoService->inserir();
        
    }

?>