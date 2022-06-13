<?php
class EspecialidadeService{
	private $especialidade;
	private $conexao;
	
	public function __construct(Especialidade $especialidade, Conexao $conexao){
		$this->especialidade=$especialidade;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'insert into especialidade (nome) values (?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->especialidade->__get('nome'));
		$stmt->execute();	
	}
	public function recuperar(){
		$query = 'select id, nome from especialidade';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarEspecialidade($id){
		$query = 'select id, nome
		from especialidade where id = ?';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update especialidade set nome=? where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->especialidade->__get('nome'));
		$stmt->bindValue(2,$this->especialidade->__get('id'));
		
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