<?php

class Perfil{

    private $pdo;

    private $idInstructor;
    private $Nombres;
    private $Apellidos;
    private $TipoDocumento;
    private $NumeroDocumento;
    private $CorreoElectronico;
    private $Usuario;
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidInstructor() : ?int{
        return $this->idInstructor;
    }
    public function setidInstructor(int $id){
        $this->idInstructor=$id;
    }
    public function getNombresInstructor() : ?string{
        return $this->Nombres;
    }
    public function setNombresInstructor(string $Nombres){
        $this->Nombres=$Nombres;
    }

    public function getApellidosInstructor() : ?string{
        return $this->Apellidos;
    }
    public function setApellidosInstructor(string $Apellidos){
        $this->Apellidos=$Apellidos;
    }

    public function getTipoDocumentoInstructor() : ?string{
        return $this->TipoDocumento;
    }
    public function setTipoDocumentoInstructor(string $TipoDocumento){
        $this->TipoDocumento=$TipoDocumento;
    }

    public function getNumeroDocumentoInstructor() : ?int{
        return $this->NumeroDocumento;
    }
    public function setNumeroDocumentoInstructor(int $NumeroDocumento){
        $this->NumeroDocumento=$NumeroDocumento;
    }

    public function getCorreoElectronicoInstructor() : ?string{
        return $this->CorreoElectronico;
    }
    public function setCorreoElectronicoInstructor(string $CorreoElectronico){
        $this->CorreoElectronico=$CorreoElectronico;
    }
    
    public function getCorreoInstitucionalInstructor() : ?string{
        return $this->CorreoInstitucional;
    }
    public function setCorreoInstitucionalInstructor(string $CorreoInstitucional){
        $this->CorreoInstitucional=$CorreoInstitucional;
    }


    public function getfk_idUsuario() : ?int{
        return $this->Usuario;
    }
    public function setfk_idUsuario(int $Usuario){
        $this->Usuario=$Usuario;
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT ins."idInstructor", 
            ins."NombresInstructor", 
            ins."ApellidosInstructor", 
            ins."TipoDocumentoInstructor", 
            ins."NumeroDocumentoInstructor", 
            ins."CorreoElectronicoInstructor", 
            ins."CorreoInstitucionalInstructor", 
            ins."fk_idUsuario",
            usu."Usuario",
            usu."Estados",
            usu."idUsuario"
    FROM "Instructor" ins 
        INNER JOIN "Usuario" usu ON ins."fk_idUsuario"= usu."idUsuario"');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "Instructor" WHERE "idInstructor"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Instructor();
            $p->setidInstructor($r->idInstructor);
            $p->setNombresInstructor($r->NombresInstructor);
            $p->setApellidosInstructor($r->ApellidosInstructor);
            $p->setTipoDocumentoInstructor($r->TipoDocumentoInstructor);
            $p->setNumeroDocumentoInstructor($r->NumeroDocumentoInstructor);
            $p->setCorreoElectronicoInstructor($r->CorreoElectronicoInstructor);
            $p->setfk_idUsuario($r->fk_idUsuario);
            $p->setCorreoInstitucionalInstructor($r->CorreoInstitucionalInstructor);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
     
    }

    public function ObtenerUsuId($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "Instructor" WHERE "fk_idUsuario"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Instructor();
            $p->setidInstructor($r->idInstructor);
            $p->setNombresInstructor($r->NombresInstructor);
            $p->setApellidosInstructor($r->ApellidosInstructor);
            $p->setTipoDocumentoInstructor($r->TipoDocumentoInstructor);
            $p->setNumeroDocumentoInstructor($r->NumeroDocumentoInstructor);
            $p->setCorreoElectronicoInstructor($r->CorreoElectronicoInstructor);
            $p->setCorreoInstitucionalInstructor($r->CorreoInstitucionalInstructor);
            $p->setfk_idUsuario($r->fk_idUsuario);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Instructor $p){

        try{
    
        $consulta=('INSERT INTO public."Instructor"(
             "NombresInstructor", "ApellidosInstructor", "TipoDocumentoInstructor", "NumeroDocumentoInstructor", "CorreoElectronicoInstructor", "fk_idUsuario", "CorreoInstitucionalInstructor")
            VALUES (?,?,?,?,?,?,?);');
            
       $this->pdo->prepare($consulta)->execute(array(
           $p->getNombresInstructor(),
           $p->getApellidosInstructor(),
           $p->getTipoDocumentoInstructor(),
           $p->getNumeroDocumentoInstructor(),
           $p->getCorreoElectronicoInstructor(),
           $p->getfk_idUsuario(),
           $p->getCorreoInstitucionalInstructor(),
            
        ));
        
    
         }catch(Exeception $e){
        die($e->getMessage());
    }


}

public function Actualizar(Instructor $p){

    
    try{
        $consulta=('UPDATE "Instructor" SET
        "NombresInstructor"=?, "ApellidosInstructor"=?, "TipoDocumentoInstructor"=?, "NumeroDocumentoInstructor"=?, "CorreoElectronicoInstructor"=?, "fk_idUsuario"=?, "CorreoInstitucionalInstructor"=?
        WHERE "idInstructor"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresInstructor(),
       $p->getApellidosInstructor(),
       $p->getTipoDocumentoInstructor(),
       $p->getNumeroDocumentoInstructor(),
       $p->getCorreoElectronicoInstructor(),
       $p->getfk_idUsuario(),
       $p->getCorreoInstitucionalInstructor(),
       $p->getidInstructor()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}
public function ActualizarUsuId(Instructor $p){

    
    try{
        $consulta=('UPDATE "Instructor" SET
        "NombresInstructor"=?, "ApellidosInstructor"=?, "TipoDocumentoInstructor"=?, "NumeroDocumentoInstructor"=?, "CorreoElectronicoInstructor"=?, "fk_idUsuario"=?, "CorreoInstitucionalInstructor"=?
        WHERE "idInstructor"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresInstructor(),
       $p->getApellidosInstructor(),
       $p->getTipoDocumentoInstructor(),
       $p->getNumeroDocumentoInstructor(),
       $p->getCorreoElectronicoInstructor(),
       $p->getfk_idUsuario(),
       $p->getCorreoInstitucionalInstructor(),
       $p->getidInstructor()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}



}