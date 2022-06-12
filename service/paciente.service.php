<?php
class PacienteService{
	private $paciente;
	private $conexao;
	
	public function __construct(Paciente $paciente, Conexao $conexao){
		$this->paciente=$paciente;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'insert into paciente (nome,endereco,cpf) values (?,?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->paciente->__get('nome'));
		$stmt->bindValue(2,$this->paciente->__get('endereco'));
		$stmt->bindValue(3,$this->paciente->__get('cpf'));
		$stmt->execute();	
	}
	public function recuperar(){
		$query = 'select id, nome, endereco, cpf from paciente';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarPaciente($id){
		$query = 'select id, nome, endereco, cpf 
		from paciente where id = ?';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update paciente set nome=?,endereco=?,cpf=?
		where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->paciente->__get('nome'));
		$stmt->bindValue(2,$this->paciente->__get('endereco'));
		$stmt->bindValue(3,$this->paciente->__get('cpf'));
		$stmt->bindValue(4,$this->paciente->__get('id'));
		
		$stmt->execute();	
	}
	public function remover(){
		$query = 'delete from paciente where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->paciente->__get('id'));	
		$stmt->execute();
	}
	
	
}



?>