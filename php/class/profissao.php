<?php

class Profissao extends CRUD
{

    protected $table = 'usuario_profissao';
    protected $collum = 'renda';

    private $profissao;
    private $renda;
    private $id;
    private $id_profissao;


    /********Início dos métodos sets e gets*********/



    public function setprofissao($profissao)
    {
        $this->profissao = $profissao;
    }
    public function getprofissao()
    {
        return $this->profissao;
    }

    public function setrenda($renda)
    {
        $this->renda = $renda;
    }
    public function getrenda()
    {
        return $this->renda;
    }

    /********Fim dos métodos sets e gets*********/
    public function insert()
    {
    }

    /***************
        Objetivo: Método que insere um cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function insertProfissao($id)
    {
        $sql = "INSERT INTO $this->table (fk_usuario_id,fk_profissao_id,renda) VALUES (:usuario,:profissao,:renda)";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':usuario', $id);
        $stmt->bindParam(':profissao', $this->profissao);
        $stmt->bindParam(':renda', $this->renda);
        //$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
        //echo $this->idade;
        return $stmt->execute();
    }
    /***************
        Objetivo: Atuliza um cliente pelo id
        Parâmetro de entrada: $id - id do cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function update($id)
    {
        $sql = "UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, email = :email , nascimento = :nascimento, cpf = :cpf, genero = :genero WHERE id = :id ";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobrenome', $this->sobrenome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}