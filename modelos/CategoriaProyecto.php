<?php

class CategoriaProyecto{

    private $pdo;

    private $idCategoriaProyecto;
    private $Nombre;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidCategoriaProyecto() : ?int{
        return $this->idCategoriaProyecto;
    }
    public function setidCategoriaProyecto(int $id){
        $this->idCategoriaProyecto=$id;
    }
    public function getNombreCategoriaProyecto() : ?string{
        return $this->Nombre;
    }
    public function setNombreCategoriaProyecto(string $Nombre){
        $this->Nombre=$Nombre;
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

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "CategoriaProyecto" WHERE "idCategoriaProyecto"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new CategoriaProyecto();
            $p->setidCategoriaProyecto($r->idCategoriaProyecto);
            $p->setNombreCategoriaProyecto($r->NombreCategoriaProyecto);
            
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
   public function Insertar(CategoriaProyecto $p){

    try{

    $consulta=('INSERT INTO public."CategoriaProyecto"(
         "NombreCategoriaProyecto")
        VALUES (?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombreCategoriaProyecto(),

       
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(CategoriaProyecto $p){

    
    try{
        $consulta=('UPDATE "CategoriaProyecto" SET
        "NombreCategoriaProyecto"=?
        WHERE "idCategoriaProyecto"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombreCategoriaProyecto(),      
       $p->getidCategoriaProyecto()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}