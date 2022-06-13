<?php
class Especialidade{
	private $id;
	private $nome;
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
	public function __get($atributo){
		return $this->$atributo;
	}
	
}
/*$me = new Medico();
$me->__set('id',1)->__set('nome','andre');
echo $me->__get('id');
echo $me->__get('nome');*/

?>