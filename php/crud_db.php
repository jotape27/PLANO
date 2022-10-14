<?php

/*************************************************************
	Objetivo: Classe responsável por representar uma tabela genérica do banco de dados.


	Atributos:
	$table- nome do tabela

	Métodos:
	insert - insere um registro na tabela
	update - atualiza um registro na tabela cliente
	find - consulta pelo id
	findAll - consulta e retorna todos os registros da tabela
	delete - exclui um registro pelo id
/*************************************************************/

abstract class CRUD extends Database
{

	protected $table;
	protected $collum;

	abstract public function insert();
	abstract public function update($id);

	/***************
		Objetivo: Método que consulta pelo id
		Parâmetro de saída: Retorna o registro da tabela. Em caso de falha na consulta ou não existir o registro, retorna falso.
	 ***************/
	public function find($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	/***************
		Objetivo: Método que consulta pelo id
		Parâmetro de saída: Retorna a tabela com registros. Em caso de falha na consulta, retorna falso.
	 ***************/
	public function findAll()
	{
		$sql = "SELECT * FROM $this->table WHERE id != 0";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(PDO::FETCH_BOTH);
	}

	public function findCount()
	{
		$sql = "SELECT count($this->collum) FROM $this->table WHERE id != 0";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	public function findCollum()
	{
		$sql = "SELECT $this->collum FROM $this->table WHERE id != 0";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	public function findSoma()
	{
		$sql = "SELECT sum($this->collum) FROM $this->table WHERE id != 0";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	public function listaGasto()
	{
		$sql = "SELECT gasto.valor, gasto.gasto FROM gasto 
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON gasto.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_gasto_id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE (usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id = 6 
		AND usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_tipo_gasto_id = 111);";

		$stmt = Database::prepare($sql);

		$stmt->execute();

		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		//print_r($stmt->fetch(PDO::FETCH_BOTH));
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}

	public function rendaProfissao()
	{
		$sql = "SELECT usuario_profissao.renda, profissao.descricao 
		FROM usuario_PROFISSAO 
		INNER JOIN profissao 
		ON profissao.id = usuario_profissao.fk_PROFISSAO_id 
		INNER JOIN usuario 
		ON usuario.id = usuario_profissao.fk_USUARIO_id 
		WHERE (usuario_profissao.fk_usuario_id = 6);";

		$stmt = Database::prepare($sql);

		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	public function findContato()
	{
		$sql = "SELECT tipo_contato.tp_contato, usuario_tpcontato.descricao 
		FROM usuario_tpcontato 
		INNER JOIN tipo_contato 
		ON tipo_contato.id = usuario_tpcontato.fk_TIPO_CONTATO_id 
		INNER JOIN usuario 
		ON usuario.id = usuario_tpcontato.fk_USUARIO_id 
		WHERE (usuario.id = 6);";

		$stmt = Database::prepare($sql);

		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	public function findPlanejamento()
	{
		$sql = "SELECT planejamento.porcentagem, tipo_planejamento.tp_planejamento
		FROM planejamento
		INNER JOIN tipo_planejamento
		ON planejamento.fk_tipo_planejamento_id = tipo_planejamento.id
		INNER JOIN usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento
		ON usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_PLANEJAMENTO_id = planejamento.id
		INNER JOIN usuario 
		ON usuario.id = usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id
		WHERE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento.fk_usuario_id = 6;";

		$stmt = Database::prepare($sql);

		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetch(PDO::FETCH_BOTH);
	}

	/***************
		Objetivo: Exclui um cliente pelo id
		Parâmetro de entrada: $id - id do cliente
		Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	 ***************
		public function delete($id)
		{
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}*/
}
