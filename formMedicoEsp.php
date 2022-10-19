<?php
    
	if(isset($_GET['metodo'])){
	 $metodo = $_GET['metodo'];	
     $acaoMedEsp = 'recuperarMedicoEsp';
	 $id=$_GET['id'];
	 
	 require_once 'medicoEsp.controller.php';
	 foreach($medicoEsp as $indice => $medicoEsp){
		$id =$medicoEsp->id; 
		$medico= $medicoEsp->nomeMedico; 
		$medicoid = $medicoEsp->id_medico;
		$especialidade=$medicoEsp->nomeEsp; 
		$especialidadeid = $medicoEsp->id_especialidade;
		
	 }
	 
	}
	$acaoEsp = 'recuperar';
	$acao = 'recuperar';
	 require_once 'medico.controller.php';
	 require_once 'especialidade.controller.php';
	 

?>

<h1>Formulário cadastro Médico/Especialidade</h1>
		 <div class="row">
			<form class="col s12" action="MedicoEsp.controller.php?acaoMedEsp=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			   <!---->
			   <div class="input-field col s4">
                      <select name="medico">
					  
					  <?php
					  if(isset($_GET['metodo'])){
							echo '<option value="'.$medicoEsp->id_medico.'">'. $medicoEsp->nomeMedico .'</option>';
						 

						 }?>
                       <?php    
					   
							foreach($medico as $indice => $medico){  
								echo '<option value="'.$medico->id .'">'. $medico->nome .'</option>'; 
							}
                        ?>
						
                       </select>
                      <label>Médico</label>
                    </div>
				<!---->
				<!---->
			   <div class="input-field col s4">
                      <select name="especialidade">
					  <?php if(isset($_GET['metodo'])){
							echo '<option value="'.$medicoEsp->id_especialidade .'">'. $medicoEsp->nomeEsp .'</option>';
						  }?>
                       <?php                          
							foreach($especialidade as $indice => $esp){  
								echo '<option value="'.$esp->id .'">'. $esp->nome .'</option>'; 
							}
                        ?>
                       </select>
                      <label>Especialidade</label>
                    </div>
				<!---->
			  <input type="hidden" name="id" value="<?php if(isset($medicoEsp->id)){echo $medicoEsp->id;}else{echo '';}?>">
			  <input type="hidden" name="id_esp">
			  <input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
			
			</form>
		</div>
	