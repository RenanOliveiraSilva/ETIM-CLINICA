<?php
    class MedicoService {
        private $medico;
        private $conexao;

        public function __construct(Medico $medico, Conexao $conexao) {
            $this->medico = $medico;
            $this->conexao = $conexao->conectar();
        }

        public function inserir() {
            $query = 'insert into medico (nome, email, senha) values (:nome, :email, :senha)';

            $stmt = $this->conexao->prepare($query);
            $stmt->BindValue(':nome', $this->medico->__get('nome'));
            $stmt->BindValue(':email', $this->medico->__get('email'));
            $stmt->BindValue(':senha', $this->medico->__get('senha'));

            $stmt->execute();
        }
    }

?>