<?php

include_once('dbconnection.php');

class Usuario{

    private $usu_nome;
    private $usu_email;
    private $usu_usuario;
    private $usu_senha;

    private $conexao;

    function __construct(){
        $this->conexao = ConectaBanco::conexao();
    }

    function __get($propriedade){
        return $this->$propriedade;
    }

    function __set($propriedade, $valor){
        $this->propriedade = $valor;
    }

    public function salvar(){
        $stmt = $this->conexao->prepare("INSERT INTO usuario (usu_nome, usu_email, usu_usuario, usu_senha) VALUES (nome, email, usuario, senha>)");
     
        $stmt->blindParam(1, $this->usu_nome);
        $stmt->blindParam(1, $this->usu_email);
        $stmt->blindParam(1, $this->usu_usuario);
        $stmt->blindParam(1, $this->usu_senha);

        stmt->execute();
        $this->id = $this->conexao->lastInsertId();
    }

    public function retornar($id){

        $rs = $this->conexao->query("SELECT * FROM usuario WHERE id = '$id'");
        $row = $rs->fetch(PDO::FETCH_OBJ);

        if(empty($row)){
            return null;
        }

        $this->id = $row->id;
        $this->usu_nome = $row->usu_nome;
        $this->usu_email = $row->usu_email;
        $this->usu_usuario = $row->usu_usuario;
        $this->usu_senha = $row->usu_senha;

    }

    public function listarTodos(){

        $rs = $this->conexao->query("SELECT * FROM usuario");

        $usuarios = null;
        $i = 0;

        while($row = $rs->fetch(PDO::FETCH_OBJ)){

            $usuario = new Usuario();

            $usuario->id = $row->id;
            $usuario->usu_nome = $row->usu_nome;
            $usuario->usu_email = $row->usu_email;
            $usuario->usu_usuario = $row->usu_usuario;
            $usuario->usu_senha = $row->usu_senha;

            $usuario->conexao = null;

            $usuarios[$i] = $usuario;
            $i++;
        }
        return usuarios;
    }

    public function atualizar(){

        $stmt = $this->conexao->prepare("UPDATE usuario SET usu_nome = ?, usu_email = ?, usu_usuario = ?, usu_senha = ? WHERE id = ?");
    
        $stmt->bindParam(1, $this->usu_nome);
        $stmt->bindParam(2, $this->usu_email);
        $stmt->bindParam(3, $this->usu_usuario);
        $stmt->bindParam(4, $this->usu_senha);

        return $stmt->execute();
    }

    public function deletar(){

        $stmt = $this->conexao->prepare("DELETE FROM usuario WHERE id = ?");
        $stmt->bindParam(1, $this->id);

        return $stmt->execute();
    }
}

?>