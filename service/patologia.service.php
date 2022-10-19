<?php
class PatologiaService{
	private $patologia;
	private $conexao;
	
	public function __construct(Patologia $patologia, Conexao $conexao){
		$this->patologia=$patologia;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'INSERT INTO patologia (cid, nome) VALUES (:cid , :nome)';
		$stmt = $this->conexao->prepare($query);

		$stmt->bindValue('cid',$this->patologia->__get('cid'));
		$stmt->bindValue('nome',$this->patologia->__get('nome'));
		$stmt->execute();	
	}
	public function recuperar(){
		$query = 'select * from patologia';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarPatologia($id){
		$query = 'select cid, nome from patologia where id = ?';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update patologia set  cid=?, nome=? where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->patologia->__get('cid'));
		$stmt->bindValue(2,$this->patologia->__get('nome'));
		$stmt->bindValue(3,$this->patologia->__get('id'));
		
		$stmt->execute();	
	}
	public function remover(){
		$query = 'delete from patologia where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->patologia->__get('id'));	
		$stmt->execute();
	}
	
	
}



?>