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
		$sql = "SELECT us.id,us.nome,us.sobrenome,us_cnt.email,us_cnt.celular,
		us.cpf,us.genero,us.nascimento,us.senha,perfil.perfil, 
		edrc.UF, edrc.cidade, edrc.cep, edrc.bairro, edrc.desc_logradouro, edrc.num, 
		pfs.descricao,us_pfs.renda
		FROM usuario us
		INNER JOIN usuario_tpcontato us_cnt ON us_cnt.fk_usuario_id = us.id
		INNER JOIN perfil ON us.fk_perfil_id = perfil.id
		INNER JOIN usuario_endereco us_edrc ON us_edrc.fk_USUARIO_id = us.id
		INNER JOIN endereco edrc ON us_edrc.fk_endereco_id = edrc.id
		INNER JOIN usuario_profissao us_pfs ON us_pfs.fk_usuario_id = us.id
		INNER JOIN profissao pfs ON us_pfs.fk_profissao_id = pfs.id 
		WHERE us.id = :id;";
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
		$sql = "SELECT us.id,us.nome,us.sobrenome,us_cnt.email,us_cnt.celular,
		us.cpf,us.genero,us.nascimento,us.senha,perfil.perfil, 
		edrc.UF, edrc.cidade, edrc.cep, edrc.bairro, edrc.desc_logradouro, edrc.num, 
		pfs.descricao,us_pfs.renda
		FROM usuario us
		INNER JOIN usuario_tpcontato us_cnt ON us_cnt.fk_usuario_id = us.id
		INNER JOIN perfil ON us.fk_perfil_id = perfil.id
		INNER JOIN usuario_endereco us_edrc ON us_edrc.fk_USUARIO_id = us.id
		INNER JOIN endereco edrc ON us_edrc.fk_endereco_id = edrc.id
		INNER JOIN usuario_profissao us_pfs ON us_pfs.fk_usuario_id = us.id
		INNER JOIN profissao pfs ON us_pfs.fk_profissao_id = pfs.id 	
		WHERE us.id != 0 	
		ORDER BY us.id;";
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
	 ***************/
	public function delete($id)
	{
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}
}
