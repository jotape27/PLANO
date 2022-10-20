<?php

class Planejamento extends CRUD
{

    protected $table = 'planejamento';

    protected $datas = 'data';



    private $dataplan;
    private $id;

    private $fixo;
    private $variavel;
    private $lazer;
    private $investimento;



    /********Início dos métodos sets e gets*********/
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }
    public function setDate($dataplan)
    {
        $this->dataplan = $dataplan;
    }
    public function getDate()
    {
        return $this->dataplan;
    }

    public function setFixo($fixo)
    {
        $this->fixo = $fixo;
    }
    public function getFixo()
    {
        return $this->fixo;
    }

    public function setVariavel($variavel)
    {
        $this->variavel = $variavel;
    }
    public function getVariavel()
    {
        return $this->variavel;
    }

    public function setLazer($lazer)
    {
        $this->lazer = $lazer;
    }
    public function getLazer()
    {
        return $this->lazer;
    }

    public function setInvestimento($investimento)
    {
        $this->investimento = $investimento;
    }
    public function getInvestimento()
    {
        return $this->investimento;
    }


    /********Fim dos métodos sets e gets*********/


    /***************
        Objetivo: Método que insere um cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function insert()
    {
        $sql = "INSERT INTO $this->table (porcentagem, fk_tipo_planejamento_id, $this->datas) 
        VALUES (:fixo,889,:data), 
                (:variavel,546,:data),
                (:lazer,341,:data),
                (:investimento,264,:data) RETURNING id";

        $stmt = Database::prepare($sql);

        //
        $stmt->bindParam(':fixo', $this->lazer);
        $stmt->bindParam(':variavel', $this->variavel);
        $stmt->bindParam(':lazer', $this->lazer);
        $stmt->bindParam(':investimento', $this->investimento);

        $stmt->bindParam(':data', $this->dataplan);
        //$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
        //echo $this->idade;
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_BOTH);
    }

    /**************
        889 	fixo
        546 	variável
        341 	lazer
        264	    investimento

        Objetivo: Atuliza um cliente pelo id
        Parâmetro de entrada: $id - id do cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function update($id)
    {
        $sql = "UPDATE $this->table SET porcentagem = :planejamento WHERE id = :id ";
        $stmt = Database::prepare($sql);

        $stmt->bindParam(':planejamento', $this->planejamento);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}