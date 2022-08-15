<?php

class MedicoEsp{
	private $id;
	private $id_medico;
    private $especializacao;
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	
}


?>