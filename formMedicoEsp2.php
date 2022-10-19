

<h1>Formulário cadastro Médico/Especialidade</h1>
		 <div class="row">
			<form class="col s12" action="MedicoEsp.controller.php?acao=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			   <!---->
			   <div class="input-field col s4">
                      <select name="medico">
					  
					  
                        ?>
						
                       </select>
                      <label>Médico</label>
                    </div>
				<!---->
				<!---->
			   <div class="input-field col s4">
                      <select name="especialidade">
					 
                       </select>
                      <label>Especialidade</label>
                    </div>
				<!---->
			  <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';}?>">
			  <input type="hidden" name="id_esp">
			  <input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
			
			</form>
		</div>
	