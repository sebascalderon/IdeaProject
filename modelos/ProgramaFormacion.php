<?php

class ProgramaFormacion{

    private $pdo;

    private $idProgramaFormacion;
    private $Nombre;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidProgramaFormacion() : ?int{
        return $this->idProgramaFormacion;
    }
    public function setidProgramaFormacion(int $id){
        $this->idProgramaFormacion=$id;
    }
    public function getNombreProgramaFormacion() : ?string{
        return $this->Nombre;
    }
    public function setNombreProgramaFormacion(string $Nombre){
        $this->Nombre=$Nombre;
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

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "ProgramaFormacion" WHERE "idProgramaFormacion"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new ProgramaFormacion();
            $p->setidProgramaFormacion($r->idProgramaFormacion);
            $p->setNombreProgramaFormacion($r->NombreProgramaFormacion);
            
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
   public function Insertar(ProgramaFormacion $p){

    try{

    $consulta=('INSERT INTO public."ProgramaFormacion"(
         "NombreProgramaFormacion")
        VALUES (?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombreProgramaFormacion(),

       
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(ProgramaFormacion $p){

    
    try{
        $consulta=('UPDATE "ProgramaFormacion" SET
        "NombreProgramaFormacion"=?
        WHERE "idProgramaFormacion"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombreProgramaFormacion(),      
       $p->getidProgramaFormacion()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}