<?php

class contrasena{

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


    public function getfk_idUsuario() : ?int{
        return $this->Usuario;
    }
    public function setfk_idUsuario(int $Usuario){
        $this->Usuario=$Usuario;
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "Instructor";');
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
            $p->setfk_idUsuario($r->fk_idUsuario);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

   public function Insertar(Instructor $p){

    try{

    $consulta=('INSERT INTO public."Instructor"(
         "NombresInstructor", "ApellidosInstructor", "TipoDocumentoInstructor", "NumeroDocumentoInstructor", "CorreoElectronicoInstructor", "fk_idUsuario")
        VALUES (?,?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresInstructor(),
       $p->getApellidosInstructor(),
       $p->getTipoDocumentoInstructor(),
       $p->getNumeroDocumentoInstructor(),
       $p->getCorreoElectronicoInstructor(),
       $p->getfk_idUsuario(),
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}



}

public function Actualizar(Instructor $p){

    
    try{
        $consulta=('UPDATE "Instructor" SET
        "NombresInstructor"=?, "ApellidosInstructor"=?, "TipoDocumentoInstructor"=?, "NumeroDocumentoInstructor"=?, "CorreoElectronicoInstructor"=?, "fk_idUsuario"=?
        WHERE "idInstructor"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresInstructor(),
       $p->getApellidosInstructor(),
       $p->getTipoDocumentoInstructor(),
       $p->getNumeroDocumentoInstructor(),
       $p->getCorreoElectronicoInstructor(),
       $p->getfk_idUsuario(),
       $p->getidInstructor()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}
public function ActualizarUsuId(Instructor $p){

    
    try{
        $consulta=('UPDATE "Instructor" SET
        "NombresInstructor"=?, "ApellidosInstructor"=?, "TipoDocumentoInstructor"=?, "NumeroDocumentoInstructor"=?, "CorreoElectronicoInstructor"=?, "fk_idUsuario"=?
        WHERE "idInstructor"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresInstructor(),
       $p->getApellidosInstructor(),
       $p->getTipoDocumentoInstructor(),
       $p->getNumeroDocumentoInstructor(),
       $p->getCorreoElectronicoInstructor(),
       $p->getfk_idUsuario(),
       $p->getidInstructor()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}



}
public function Validar($Contrasena,$idUsuario) {

    $consulta=$this->pdo->prepare('SELECT Contrasena FROM "Usuario" WHERE "Contrasena"= ? AND "idUsuario" = ? ');
    $consulta->execute(array($Contrasena, $idUsuario));
    $r=$consulta->fetch(PDO::FETCH_OBJ);
    $p=new Instructor();
    $p->setidInstructor($r->idInstructor);
    $p->setNombresInstructor($r->NombresInstructor);
    $p->setApellidosInstructor($r->ApellidosInstructor);
    $p->setTipoDocumentoInstructor($r->TipoDocumentoInstructor);
    $p->setNumeroDocumentoInstructor($r->NumeroDocumentoInstructor);
    $p->setCorreoElectronicoInstructor($r->CorreoElectronicoInstructor);
    $p->setfk_idUsuario($r->fk_idUsuario);
   
    return $p;
}



}