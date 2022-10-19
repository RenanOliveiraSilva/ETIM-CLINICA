<?php
class Patologia{
	private $id;
	private $cid;
	private $nome;
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	
}

?>