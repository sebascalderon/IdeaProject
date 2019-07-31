<?php

class Proyecto{

    private $pdo;

    private $idProyecto;
    private $Nombre;
    private $ManualUsuario;
    private $ManualInstalacion;    
    private $Fecha;
    private $CodigoFuente;
    private $Descripcion;
    private $CategoriaProyecto;
    private $Documento;
    private $PalabrasClave;
    private $Calificacion;
    private $Comentario;
    private $Aprendiz;
    
    

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidProyecto() : ?int{
        return $this->idProyecto;
    }
    public function setidProyecto(int $id){
        $this->idProyecto=$id;
    }



    public function getNombreProyecto() : ?string{
        return $this->Nombre;
    }
    public function setNombreProyecto(string $Nombre){
        $this->Nombre=$Nombre;
    }


    public function getManualUsuarioProyecto() : ?string{
        return $this->ManualUsuario;
    }
    public function setManualUsuarioProyecto(string $ManualUsuario){
        $this->ManualUsuario=$ManualUsuario;
    }


    public function getManualInstalacionProyecto() : ?string{
        return $this->ManualInstalacion;
    }
    public function setManualInstalacionProyecto(string $ManualInstalacion){
        $this->ManualInstalacion=$ManualInstalacion;
    }



    public function getFechaProyecto() : ?string{
        return $this->Fecha;
    }
    public function setFechaProyecto(string $Fecha){
        $this->Fecha=$Fecha;
    }



    public function getCodigoFuenteProyecto() : ?string{
        return $this->CodigoFuente;
    }
    public function setCodigoFuenteProyecto(string $CodigoFuente){
        $this->CodigoFuente=$CodigoFuente;
    }

    

    public function getDescripcionProyecto() : ?string{
        return $this->Descripcion;
    }
    public function setDescripcionProyecto(string $Descripcion){
        $this->Descripcion=$Descripcion;
    }

    

    public function getfk_idcatProyecto() : ?int{
        return $this->CategoriaProyecto;
    }
    public function setfk_idcatProyecto(int $CategoriaProyecto){
        $this->CategoriaProyecto=$CategoriaProyecto;
    }


    public function getDocumentoProyecto() : ?string{
        return $this->Documento;
    }
    public function setDocumentoProyecto(string $Documento){
        $this->Documento=$Documento;
    }

    public function getPalabrasClaveProyecto() : ?string{
        return $this->PalabrasClave;
    }
    public function setPalabrasClaveProyecto(string $PalabrasClave){
        $this->PalabrasClave=$PalabrasClave;
    }

    
    public function getfk_idAprendiz() : ?string{
        return $this->Aprendiz;
    }
    public function setfk_idAprendiz(string $Aprendiz){
        $this->Aprendiz=$Aprendiz;
    }
    public function getCalificacion() : ?int{
        return $this->Calificacion;
    }
    public function setCalificacion(int $Calificacion){
        $this->Calificacion=$Calificacion;
    }
    public function getComentario() : ?string{
        return $this->Comentario;
    }
    public function setComentario(string $Comentario){
        $this->Comentario=$Comentario;
    }


//---------------------------------------------------------------------------------------------------------------------------------------------




    public function Listar(){
    try{
        $consulta=$this->pdo->prepare('SELECT * FROM "Proyecto" JOIN "Aprendiz" ON "Proyecto"."fk_idAprendiz" = "Aprendiz"."idAprendiz" JOIN "FichaCaracterizacion" ON "Aprendiz"."fk_idFichaCa" = "FichaCaracterizacion"."idFichaCaracterizacion" JOIN "ProgramaFormacion" ON "FichaCaracterizacion"."fk_idProgFormacion" = "ProgramaFormacion"."idProgramaFormacion"
        ORDER BY "NombreProgramaFormacion";');
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }catch(Exeption $e){
        die($e->getMessage());
    }
}

public function ListarDocumentoProyecto($idProyecto){
    try{
        $consulta=$this->pdo->prepare('SELECT * 
                                    FROM "Proyecto" JOIN "Aprendiz" ON "Proyecto"."fk_idAprendiz"= "Aprendiz"."idAprendiz" 
                                    JOIN "FichaCaracterizacion" ON "Aprendiz"."fk_idFichaCa" = "FichaCaracterizacion"."idFichaCaracterizacion" 
                                    JOIN "ProgramaFormacion" ON "FichaCaracterizacion"."fk_idProgFormacion" = "ProgramaFormacion"."idProgramaFormacion"
                                    WHERE "Proyecto"."idProyecto" = :id
                                    ;');
        $consulta->execute(['id'=>$idProyecto]);
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }catch(Exeption $e){
        
        die($e->getMessage());
    }
}

public function Obtener($id){
    try{
       
        $consulta=$this->pdo->prepare('SELECT * FROM "Proyecto" WHERE "idProyecto"=?;');
        $consulta->execute(array($id));
        $r=$consulta->fetch(PDO::FETCH_OBJ);
        $p=new Proyecto();
        $p->setidProyecto($r->idProyecto);
        $p->setNombreProyecto($r->NombreProyecto);
        $p->setManualUsuarioProyecto($r->ManualUsuarioProyecto);
        $p->setManualInstalacionProyecto($r->ManualInstalacionProyecto);       
        $p->setFechaProyecto($r->FechaProyecto);
        $p->setCodigoFuenteProyecto($r->CodigoFuenteProyecto);
        $p->setDescripcionProyecto($r->DescripcionProyecto);
        $p->setfk_idcatProyecto($r->fk_idcatProyecto);
        $p->setDocumentoProyecto($r->DocumentoProyecto);
        $p->setPalabrasClaveProyecto($r->PalabrasClaveProyecto);
        $p->setCalificacion($r->Calificacion);
        $p->setComentario($r->Comentario);
        $p->setfk_idAprendiz($r->fk_idAprendiz);
   
        
        return $p;

    }catch(Exeption $e){
        die($e->getMessage());
    }
}
public function Insertar(Proyecto $p){
    
try{

$consulta=('INSERT INTO public."Proyecto"(
    "NombreProyecto", "ManualUsuarioProyecto", "ManualInstalacionProyecto", "FechaProyecto", "CodigoFuenteProyecto", "DescripcionProyecto", "fk_idcatProyecto", "DocumentoProyecto", "PalabrasClaveProyecto","Calificacion","Comentario","fk_idAprendiz")
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
    
    
$this->pdo->prepare($consulta)->execute(array(
   $p->getNombreProyecto(),
   $p->getManualUsuarioProyecto(),
   $p->getManualInstalacionProyecto(),  
   $p->getFechaProyecto(),
   $p->getCodigoFuenteProyecto(),
   $p->getDescripcionProyecto(),
   $p->getfk_idcatProyecto(),
   $p->getDocumentoProyecto(),
   $p->getPalabrasClaveProyecto(),
   $p->getCalificacion(),
   $p->getComentario(),
   $p->getfk_idAprendiz(),
    
));





 }catch(Exeception $e){
die($e->getMessage());
}


}

public function Actualizar(Proyecto $p){


try{
    
    $consulta=('UPDATE "Proyecto" SET
     "NombreProyecto"=?, "FechaProyecto"=?, "DescripcionProyecto"=?,"fk_idcatProyecto"=?, "PalabrasClaveProyecto"=?,"Calificacion"=?,"Comentario"=?, "fk_idAprendiz"=?
    WHERE "idProyecto"=?;');

    
$this->pdo->prepare($consulta)->execute(array(  
   $p->getNombreProyecto(),
   $p->getFechaProyecto(),
   $p->getDescripcionProyecto(),
   $p->getfk_idcatProyecto(),
   $p->getPalabrasClaveProyecto(),
   $p->getCalificacion(),
   $p->getComentario(),
    $p->getfk_idAprendiz(),
   $p->getidProyecto()        
));


if((substr($p->getDocumentoProyecto(),(strlen($p->getDocumentoProyecto()))-4)) == ".pdf"){
    $consulta1=('UPDATE "Proyecto" SET
    "DocumentoProyecto"=?
   WHERE "idProyecto"=?;');

$this->pdo->prepare($consulta1)->execute(array($p->getDocumentoProyecto(),$p->getidProyecto()));
   }else{

   }



if((substr($p->getManualUsuarioProyecto(),(strlen($p->getManualUsuarioProyecto()))-4)) == ".pdf"){
    $consulta2=('UPDATE "Proyecto" SET
    "ManualUsuarioProyecto"=?
   WHERE "idProyecto"=?;');

$this->pdo->prepare($consulta2)->execute(array($p->getManualUsuarioProyecto(),$p->getidProyecto()));
   }else{
       
   }

   if((substr($p->getManualInstalacionProyecto(),(strlen($p->getManualInstalacionProyecto()))-4)) == ".pdf"){
    $consulta3=('UPDATE "Proyecto" SET
    "ManualInstalacionProyecto"=?
   WHERE "idProyecto"=?;');

$this->pdo->prepare($consulta3)->execute(array($p->getManualInstalacionProyecto(),$p->getidProyecto()));
   }else{
       
   }

   if((substr($p->getCodigoFuenteProyecto(),(strlen($p->getCodigoFuenteProyecto()))-4)) == ".rar"){
    $consulta4=('UPDATE "Proyecto" SET
    "CodigoFuenteProyecto"=?
   WHERE "idProyecto"=?;');

$this->pdo->prepare($consulta4)->execute(array($p->getCodigoFuenteProyecto(),$p->getidProyecto()));
   }else{
       
   }



 }catch(Exeception $e){
die($e->getMessage());
}


}


}