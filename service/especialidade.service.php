<?php
class EspecialidadeService{
	private $especialidade;
	private $conexao;
	
	public function __construct(Especialidade $especialidade, Conexao $conexao){
		$this->especialidade=$especialidade;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'insert into especialidade (especialidade) values (?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->especialidade->__get('especialidade'));
		$stmt->execute();	
	}
	public function recuperar(){
		$query = 'select id, especialidade from especialidade';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarEspecialidade($id){
		$query = 'select id, especialidade
		from especialidade where id = ?';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update especialidade set especialidade=?
		where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->especialidade->__get('especialidade'));
		
		$stmt->execute();	
	}
	public function remover(){
		$query = 'delete from especialidade where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->especialidade->__get('id'));	
		$stmt->execute();
	}
	
	
}



?>