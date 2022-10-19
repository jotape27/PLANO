<?php


/*************************************************************
    Objetivo: Classe responsável por representar todas as operações com o cliente do negócio.


    Atributos:
    $nome- nome do cliente
    $sobrenome - sobrenome do cliente
    $email - email do cliente
    $idade - idade do cliente

    Métodos:
    insert - insere um cliente na tabela cliente
    update - atualiza um cliente na tabela cliente

    setNome - Atribui um nome ao cliente
    getNome - Retorna o nome do cliente
    setSobrenome - Atribui um sobrenome ao cliente
    getSobrenome - Retorna o sobrenome ao cliente
    setEmail - Atribui um email ao cliente
    getEmail - Retorna o email do cliente
    setIdade - Atribui uma idade ao cliente
    getIdade - Retorn a idade do cliente
/*************************************************************/

class Usuario extends CRUD
{

    protected $table = 'usuario';
    protected $table1 = 'usuario_tpcontato';
    protected $collum = 'id';

    private $id;
    private $nome;
    private $sobrenome;
    private $celular;
    private $cpf;
    private $nascimento;
    private $genero;
    private $senha;

    private $perfil;



    /********Início dos métodos sets e gets*********/
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }
    public function getNascimento()
    {
        return $this->nascimento;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
    public function getPerfil()
    {
        return $this->perfil;
    }
    /********Fim dos métodos sets e gets*********/

    public function insert()
    {
        $sql = "INSERT INTO $this->table (nome,sobrenome,cpf,genero,nascimento,senha,fk_perfil_id) VALUES 
        (:nome,:sobrenome,:cpf,:genero,:nascimento,:senha,:perfil) RETURNING id";
        //$sql1 = "INSERT INTO $this->table1 (fk_tipo_contato_id,descricao) VALUES (45,:email)";

        $stmt = Database::prepare($sql);
        //$stmt1 = Database::prepare($sql1);
        //$stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobrenome', $this->sobrenome);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':perfil', $this->perfil);
        //$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
        //echo $this->idade;
        //$stmt1->bindParam(':email', $this->email);
        //$stmt1->bindParam(':celular', $this->celular);

        $stmt->execute();
        //return $stmt1->execute();

        return $stmt->fetch(PDO::FETCH_BOTH);
    }

    public function insertContato($id)
    {
        $sql = "INSERT INTO $this->table1 (fk_usuario_id, email, celular) VALUES (:id,:email,:celular)";
        $stmt = Database::prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':celular', $this->celular);

        return $stmt->execute();
    }

    public function insertProfissao()
    {
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, nascimento = :nascimento, cpf = :cpf, genero = :genero WHERE id = :id ";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobrenome', $this->sobrenome);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function update_password($id)
    {
        $sql = "UPDATE $this->table SET senha = :senha WHERE id = :id ";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function login()
    {
        $sql = "SELECT * FROM $this->table WHERE cpf = :cpf/* and senha = :senha*/";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":cpf", $this->cpf);
        //$stmt->bindParam(":senha", $this->senha);
        //if(password_verify($this->senha, $dados['senha'])):
        $stmt->execute();
        return $stmt->fetch();
        // //endif;
        // echo $stmt['id'];
        echo $sql;
    }
}

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
    private $logradouro;



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
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /********Fim dos métodos sets e gets*********/


    /***************
        Objetivo: Método que insere um cliente
        Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
    /***************/
    public function insert()
    {
        $sql = "INSERT INTO $this->table (cep,desc_logradouro,num,cidade,uf,fk_logradouro_id) VALUES (:cep,:endereco,:numero,:cidade,:uf,:logradouro) RETURNING id;";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':logradouro', $this->logradouro);
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

    /***************
    Objetivo: Atuliza um cliente pelo id
    Parâmetro de entrada: $id - id do cliente
    Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
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
