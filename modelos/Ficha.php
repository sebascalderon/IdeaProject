<?php

class Ficha{

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "FichaCaracterizacion" ORDER BY "idFichaCaracterizacion" ASC ;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function FichaPorPrograma($idPrograma){
        try{
            $consulta=$this->pdo->prepare('SELECT "idFichaCaracterizacion","NumeroFichaCaracterizacion" FROM "FichaCaracterizacion" JOIN "ProgramaFormacion" ON "fk_idProgFormacion"="idProgramaFormacion" WHERE "idProgramaFormacion"=?;');
            $consulta->execute(array($idPrograma));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
        
    }
}