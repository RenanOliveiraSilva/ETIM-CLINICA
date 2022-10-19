<?php
class MedicoService{
	private $medico;
	private $conexao;
	
	public function __construct(Medico $medico, Conexao $conexao){
		$this->medico=$medico;
		$this->conexao = $conexao->conectar();
	}
	public function inserir(){
		$query = 'insert into medico (nome,email,senha,imagem)values(:nome,:email,:senha,:imagem)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->medico->__get('nome'));
		$stmt->bindValue(':email',$this->medico->__get('email'));
		$stmt->bindValue(':senha',$this->medico->__get('senha'));
		$stmt->bindValue(':imagem',$this->medico->__get('imagem'));

		if ($stmt->execute())
		{
			$diretorio = 'imagem/';
			move_uploaded_file($_FILES['imagem']['tmp_name'],
			$diretorio.$this->medico->get['imagem']);
		}


	}
	public function recuperar(){
		$query = 'select id, nome, email, senha from medico';
		$stmt= $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarMedico($id){
		$query = 'select id, nome, email, senha 
		from medico where id = :id';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(':id',$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function alterar(){
		$query = 'update medico set nome=:nome,email=:email,senha=:senha,imagem=:imagem
		where id = :id';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->medico->__get('nome'));
		$stmt->bindValue(':email',$this->medico->__get('email'));
		$stmt->bindValue(':senha',$this->medico->__get('senha'));
		$stmt->bindValue(':id',$this->medico->__get('id'));
		$stmt->bindValue(':imagem',$this->medico->__get('imagem'));
		
		
		if($stmt->execute())
		{
			if($_SESSION['imagem']!=$this->medico->_get['imagem'])
			{
				unlink('imagem\\'.$_SESSION['imagem']);
			}
			$diretorio = 'imagem/';
			move_uploaded_file($_FILES['imagem']['tmp_name'],
			$diretorio.$this->medico->get['imagem']);
		}	

	}
	public function remover(){
		$query = 'delete from medico where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->medico->__get('id'));

		if($stmt->execute())
		{
			unlink('imagem\\'.$_SESSION['imagem']);
		}
		
		
	}
	public function recuperarLogin($email,$senha){
		$query = 'select * from medico
				  where email = ? and senha=?';
		$stmt=$this->conexao->prepare($query);
		$stmt->bindValue(1,$email);
		$stmt->bindValue(2,$senha);
		$stmt->execute();	
		
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	
	
}



?>