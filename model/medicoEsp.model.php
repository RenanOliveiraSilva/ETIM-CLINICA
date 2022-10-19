<?php
<<<<<<< HEAD
class MedicoEsp{
	private $id;
	private $id_medico;
	private $id_especialidade;
=======

class MedicoEsp{
	private $id;
	private $id_medico;
    private $especializacao;
>>>>>>> 95a535b6c9cc15bb32e4db85f19d2cd45179cfb9
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	
}


?>