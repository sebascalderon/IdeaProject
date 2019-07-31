<?php

class Subir{

    private $pdo;

    private $idAprendiz;
    private $Nombres;
    private $Apellidos;
    private $TipoDocumento;
    private $NumeroDocumento;
    private $CorreoElectronico;
    private $fk_idFichaCa;
    private $Usuario;
    private $CorreoInstitucional;
    

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidAprendiz() : ?int{
        return $this->idAprendiz;
    }
    public function setidAprendiz(int $id){
        $this->idAprendiz=$id;
    }
    public function getNombresAprendiz() : ?string{
        return $this->Nombres;
    }
    public function setNombresAprendiz(string $Nombres){
        $this->Nombres=$Nombres;
    }

    public function getApellidosAprendiz() : ?string{
        return $this->Apellidos;
    }
    public function setApellidosAprendiz(string $Apellidos){
        $this->Apellidos=$Apellidos;
    }

    public function getTipoDocumentoAprendiz() : ?string{
        return $this->TipoDocumento;
    }
    public function setTipoDocumentoAprendiz(string $TipoDocumento){
        $this->TipoDocumento=$TipoDocumento;
    }

    public function getNumeroDocumentoAprendiz() : ?int{
        return $this->NumeroDocumento;
    }
    public function setNumeroDocumentoAprendiz(int $NumeroDocumento){
        $this->NumeroDocumento=$NumeroDocumento;
    }

    public function getCorreoElectronicoAprendiz() : ?string{
        return $this->CorreoElectronico;
    }
    public function setCorreoElectronicoAprendiz(string $CorreoElectronico){
        $this->CorreoElectronico=$CorreoElectronico;
    }
    public function getCorreoInstitucionalAprendiz() : ?string{
        return $this->CorreoInstitucional;
    }
    public function setCorreoInstitucionalAprendiz(string $CorreoInstitucional){
        $this->CorreoInstitucional=$CorreoInstitucional;
    }


    public function getfk_idFichaCa() : ?int{
        return $this->fk_idFichaCa;
    }
    public function setfk_idFichaCa(int $fk_idFichaCa){
        $this->fk_idFichaCa=$fk_idFichaCa;
    }
//desde aca usuario
    public function getfk_idUsuario() : ?string{
        return $this->Usuario;
    }
    public function setfk_idUsuario(string $Usuario){
        $this->Usuario=$Usuario;
    }
//hasta aca usuario




    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT *
                                           FROM "Aprendiz" apre
                                            JOIN "FichaCaracterizacion" ficha ON apre."fk_idFichaCa" = ficha."idFichaCaracterizacion"
                                            JOIN "ProgramaFormacion" prg ON ficha."fk_idProgFormacion" = prg."idProgramaFormacion"
                                           ORDER BY apre."idAprendiz"  
                                          ');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "Aprendiz" WHERE "idAprendiz"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p = new Aprendiz();
            $p->setidAprendiz($r->idAprendiz);
            $p->setNombresAprendiz($r->NombresAprendiz);
            $p->setApellidosAprendiz($r->ApellidosAprendiz);
            $p->setTipoDocumentoAprendiz($r->TipoDocumentoAprendiz);
            $p->setNumeroDocumentoAprendiz($r->NumeroDocumentoAprendiz);
            $p->setCorreoElectronicoAprendiz($r->CorreoElectronicoAprendiz);
            $p->setfk_idUsuario($r->fk_idUsuario);
            $p->setCorreoInstitucionalAprendiz($r->CorreoInstitucionalAprendiz);
            $p->setfk_idFichaCa($r->fk_idFichaCa);

           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
   public function Insertar(Aprendiz $p){

    try{

    $consulta=('INSERT INTO public."Aprendiz"(
         "NombresAprendiz", "ApellidosAprendiz", "TipoDocumentoAprendiz", "NumeroDocumentoAprendiz", "CorreoElectronicoAprendiz", "fk_idFichaCa", "fk_idUsuario", "CorreoInstitucionalAprendiz")
        VALUES (?,?,?,?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresAprendiz(),
        $p->getApellidosAprendiz(),
       $p->getTipoDocumentoAprendiz(),
       $p->getNumeroDocumentoAprendiz(),
       $p->getCorreoElectronicoAprendiz(),
       $p->getfk_idFichaCa(),
       $p->getfk_idUsuario(),
       $p->getCorreoInstitucionalAprendiz(),
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(Aprendiz $p){

    
    try{
        $consulta=('UPDATE "Aprendiz" SET
        "NombresAprendiz"=?, "ApellidosAprendiz"=?, "TipoDocumentoAprendiz"=?, "NumeroDocumentoAprendiz"=?, "CorreoElectronicoAprendiz"=?, "fk_idFichaCa"=?, "fk_idUsuario"=?, "CorreoInstitucionalAprendiz"=?
        WHERE "idAprendiz"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
      
       $p->getNombresAprendiz(),
       $p->getApellidosAprendiz(),
       $p->getTipoDocumentoAprendiz(),
       $p->getNumeroDocumentoAprendiz(),
       $p->getCorreoElectronicoAprendiz(),
       $p->getfk_idFichaCa(),
       $p->getfk_idUsuario(),
       $p->getCorreoInstitucionalAprendiz(),
       $p->getidAprendiz()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}