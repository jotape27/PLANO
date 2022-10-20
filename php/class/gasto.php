<?php

class Gasto extends CRUD
{

    protected $table = 'gasto';
    protected $table1 = 'usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento';
    protected $datas = 'data';

    private $id_user;
    private $data;
    private $tipo;
    private $valor;
    private $gasto;



    public function setId($id_user)
    {
        $this->id_user = $id_user;
    }
    public function getId($id_user)
    {
        return $this->id_user;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setDate($data)
    {
        $this->data = $data;
    }
    public function getDate()
    {
        return $this->data;
    }
    public function setGasto($gasto)
    {
        $this->gasto = $gasto;
    }
    public function getGasto()
    {
        return $this->gasto;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }


    public function insert()
    {
        $sql = "INSERT INTO $this->table (valor, gasto, $this->datas) VALUES (:valor,:gasto,:$this->datas) RETURNING id";
        $stmt = Database::prepare($sql);

        //
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':gasto', $this->gasto);
        $stmt->bindParam(':data', $this->data);
        //$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
        //echo $this->idade;
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_BOTH);
    }

    public function insertGasto($tipo, $id_gasto)
    {
        $sql = "INSERT INTO $this->table1 VAlUES (:tipo,:id_user,:gasto)";
        $stmt = Database::prepare($sql);

        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':gasto', $id_gasto);

        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET valor = :valor WHERE id = :id ";
        $stmt = Database::prepare($sql);

        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findFix($id)
    {
        $sql = "SELECT gasto.valor, gasto.gasto FROM $this->table 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 111
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    public function sumfindFix($id)
    {
        $sql = "SELECT sum(gasto.valor) FROM gasto 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 111
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function findVar($id)
    {
        $sql = "SELECT gasto.valor, gasto.gasto FROM $this->table 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 222
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    public function sumfindVar($id)
    {
        $sql = "SELECT sum(gasto.valor) FROM gasto 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 222
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function findInvest($id)
    {
        $sql = "SELECT gasto.valor, gasto.gasto FROM $this->table 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 333
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function sumfindInvest($id)
    {
        $sql = "SELECT sum(gasto.valor) FROM gasto 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 333
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function findLazer($id)
    {
        $sql = "SELECT gasto.valor, gasto.gasto FROM $this->table 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 444
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function sumfindLazer($id)
    {
        $sql = "SELECT sum(gasto.valor) FROM gasto 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 444
        AND usuario.id = $id;";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        //retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
}