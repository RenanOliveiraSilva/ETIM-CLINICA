<?php
    if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];

	 $id=$_GET['id'];

     require_once 'medicoEsp.controller.php';

	 foreach($medicoEsp as $indice => $medicoEsp){
		$id=$medicoEsp->id; 
		$nome=$medicoEsp->nomeMed; 
		$especialidade=$medicoEsp->nomeEsp; 
	 }
	}

    require_once 'medico.controller.php';
    require_once 'especialidade.controller.php';
    $acaoEsp = 'recuperar';
    $acao = 'recuperar'; 

?>
<h1>Formulário cadastro Médico/Especialidade</h1>
		 <div class="row">
			<form class="col s12" action="medicoEsp.controller.php?acao=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">

                <div class="input-field col s4">
                    <select name="medico">
                        <?php
                        
                            foreach ($medico as $indice => $medico)
                            {
                                echo '<option value="'.$medico->id.'">'. $medico->nome.'</option>';
                            }
                        
                        ?>
                    </select>
                    <select name="especialidade">
                        <?php
                        
                            foreach ($especialidade as $indice => $especialidade)
                            {
                                echo '<option value="'.$esp->id.'">'. $esp->nome.'</option>';
                            }
                        
                        ?>
                    </select>
                    

                </div>

			  <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			  <input type="hidden" name="id_esp">
			  <input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
			</form>
		</div>