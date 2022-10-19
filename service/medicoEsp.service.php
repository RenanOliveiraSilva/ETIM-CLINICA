<?php
class MedicoEspService{
	private $medicoEsp;
	private $conexao;
	
	public function __construct(MedicoEsp $medicoEsp, Conexao $conexao){
		$this->medicoEsp=$medicoEsp;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'insert into medesp (id_medico, id_especialidade) values (?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->medicoEsp->__get('id_medico'));
		$stmt->bindValue(2,$this->medicoEsp->__get('id_especialidade'));
		$stmt->execute();	
	}
	public function recuperar(){
		$query = 'SELECT me.id, me.id_medico, me.id_especialidade, m.nome as nomeMedico, e.nome as nomeEsp
				  from medesp me, medico m, especialidade e
				  where me.id_medico = m.id and me.id_especialidade = e.id';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarMededicoEsp($id){
		$query = 'SELECT me.id, me.id_medico, me.id_especialidade, m.nome as nomeMedico, e.nome as nomeEsp
				  from medesp me, medico m, especialidade e
				  where me.id_medico = m.id and me.id_especialidade = e.id and me.id= ?';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update medesp set id_medico=?,id_especialidade=? where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->medicoEsp->__get('id_medico'));
		$stmt->bindValue(2,$this->medicoEsp->__get('id_especialidade'));
		$stmt->bindValue(3,$this->medicoEsp->__get('id'));
		
		$stmt->execute();	
	}
	public function remover(){
		$query = 'delete from medesp where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->medicoEsp->__get('id'));	
		$stmt->execute();
	}
	
	
}



?>