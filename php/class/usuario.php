<?php

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

    public function updateContato($id)
    {
        $sql = "UPDATE $this->table1 SET email = :email, celular = :celular WHERE fk_usuario_id = :id ";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam('celular', $this->celular);
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