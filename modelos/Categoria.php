<?php

class Categoria{

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "CategoriaProyecto";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

}