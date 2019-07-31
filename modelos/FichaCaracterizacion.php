
<?php

class FichaCaracterizacion{

    private $pdo;

    private $idFichaCaracterizacion;
    private $Numero;
    private $FechaInicio;
    private $FechaFin;
    private $FechaEtapa;
    private $ProgramaFormacion;
    private $InstructorFicha;
  
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidFichaCaracterizacion() : ?int{
        return $this->idFichaCaracterizacion;
    }
    public function setidFichaCaracterizacion(int $id){
        $this->idFichaCaracterizacion=$id;
    }
    public function getNumeroFichaCaracterizacion() : ?int{
        return $this->Numero;
    }
    public function setNumeroFichaCaracterizacion(int $Numero){
        $this->Numero=$Numero;
    }
    
    public function getFechaInicioFichaCaracterizacion() : ?string{
        return $this->FechaInicio;
    }
    public function setFechaInicioFichaCaracterizacion(string $FechaInicio){
        $this->FechaInicio=$FechaInicio;
    }

    public function getFechaFinFichaCaracterizacion() : ?string{
        return $this->FechaFin;
    }
    public function setFechaFinFichaCaracterizacion(string $FechaFin){
        $this->FechaFin=$FechaFin;
    }

   

    public function getfk_idProgFormacion() : ?int{
        return $this->ProgramaFormacion;
    }
    public function setfk_idProgFormacion(int $ProgramaFormacion){
        $this->ProgramaFormacion=$ProgramaFormacion;
    }

    public function getfk_idInstructor() : ?int{
        return $this->InstructorFicha;
    }
    public function setfk_idInstructor(int $InstructorFicha){
        $this->InstructorFicha=$InstructorFicha;
    }
    


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "FichaCaracterizacion" JOIN "ProgramaFormacion" ON "FichaCaracterizacion"."fk_idProgFormacion" = "ProgramaFormacion"."idProgramaFormacion"
            JOIN "Instructor"  ON "FichaCaracterizacion"."fk_idInstructor" = "Instructor"."idInstructor"
            ORDER BY "Estados";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "FichaCaracterizacion" WHERE "idFichaCaracterizacion"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new FichaCaracterizacion();
            $p->setidFichaCaracterizacion($r->idFichaCaracterizacion);
            $p->setNumeroFichaCaracterizacion($r->NumeroFichaCaracterizacion);
            $p->setFechaInicioFichaCaracterizacion($r->FechaInicioFichaCaracterizacion);
            $p->setFechaFinFichaCaracterizacion($r->FechaFinFichaCaracterizacion);           
            $p->setfk_idProgFormacion($r->fk_idProgFormacion);
            $p->setfk_idInstructor($r->fk_idInstructor);
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
   public function Insertar(FichaCaracterizacion $p){

    try{

        $Estados = "A espera de ser activada";

    $consulta=('INSERT INTO public."FichaCaracterizacion"(
         "NumeroFichaCaracterizacion", "FechaInicioFichaCaracterizacion", "FechaFinFichaCaracterizacion","fk_idProgFormacion", "fk_idInstructor", "Estados")
        VALUES (?,?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNumeroFichaCaracterizacion(),
       $p->getFechaInicioFichaCaracterizacion(),
       $p->getFechaFinFichaCaracterizacion(),
       $p->getfk_idProgFormacion(),
       $p->getfk_idInstructor(),
       $Estados,

        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(FichaCaracterizacion $p){

    
    try{
        $consulta=('UPDATE "FichaCaracterizacion" SET
        "NumeroFichaCaracterizacion"=?, "FechaInicioFichaCaracterizacion"=?, "FechaFinFichaCaracterizacion"=?, "fk_idProgFormacion"=?, "fk_idInstructor"=?
        WHERE "idFichaCaracterizacion"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
        $p->getNumeroFichaCaracterizacion(),
        $p->getFechaInicioFichaCaracterizacion(),
        $p->getFechaFinFichaCaracterizacion(),
        $p->getfk_idProgFormacion(),
        $p->getfk_idInstructor(),

        $p->getidFichaCaracterizacion()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


public function Estados($idFichaCaracterizacion, $estado) {
    try {
        $consulta = ('UPDATE "FichaCaracterizacion"
        SET "Estados" = :estado
        FROM (SELECT *
            FROM "Aprendiz" apre
                    INNER JOIN "FichaCaracterizacion" ficha on apre."fk_idFichaCa" = ficha."idFichaCaracterizacion"
            WHERE apre."fk_idFichaCa" = :ficha) as info
        WHERE info."fk_idFichaCa" = "FichaCaracterizacion"."idFichaCaracterizacion"');
        $this->pdo->prepare($consulta)->execute(array('ficha' => $idFichaCaracterizacion, 'estado' => $estado));
    } catch (Exeception $e) {
        die($e->getMessage());
    }

// var_dump($id);
// exit();
}


}