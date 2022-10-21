<?php

class Endereco extends CRUD
{

    protected $table = 'endereco';
    protected $table1 = 'usuario_endereco';

    private $id_endereco;
    private $cep;
    private $endereco;
    private $numero;
    private $cidade;
    private $uf;
    private $bairro;



    /********Início dos métodos sets e gets*********/
    public function setID($id_endereco)
    {
        $this->id_endereco = $id_endereco;
    }
    public function getID()
    {
        return $this->id_endereco;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function geCep()
    {
        return $this->cep;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function setUf($uf)
    {
        $this->uf = $uf;
    }
    public function getUf()
    {
        return $this->uf;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getBairro()
    {
        return $this->bairro;
    }

    /********Fim dos métodos sets e gets*********/


    /***************
        Objetivo: Método que insere um cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
    /***************/
    public function insert()
    {
        $sql = "INSERT INTO $this->table (cep,desc_logradouro,num,cidade,uf,bairro) VALUES (:cep,:endereco,:numero,:cidade,:uf,:bairro) RETURNING id;";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':bairro', $this->bairro);
        //$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
        //echo $this->idade;
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_BOTH);
    }

    public function insertEndereco($id_endereco, $id)
    {
        $sql = "INSERT INTO $this->table1 (fk_usuario_id,fk_endereco_id) VALUES (:id_user,:id_endereco);";
        $stmt = Database::prepare($sql);

        $stmt->bindParam(':id_user', $id);
        $stmt->bindParam(':id_endereco', $id_endereco);

        return $stmt->execute();
    }


    /***************
        Objetivo: Atuliza um cliente pelo id
        Parâmetro de entrada: $id - id do cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function update($id)
    {
        $sql = "UPDATE $this->table SET cep = :cep, endereco = :endereco, numero = :numero, cidade = :cidade, uf = :uf, fk_logradouro_id = :logradouro WHERE id = :id;";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':logradouro', $this->logradouro);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}