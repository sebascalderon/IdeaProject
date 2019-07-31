<?php

class Programaf{

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "ProgramaFormacion";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

}