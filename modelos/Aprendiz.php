<?php

class Aprendiz{

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
            ORDER BY ficha."Estados"  ');
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

public function EjecucionCarga(){ 

    $fname = $_FILES['DocumentoCSV']['name'];
    echo 'Cargando nombre del archivo: '.$fname.' <br>';
        $chk_ext = explode(".",$fname);

        if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['DocumentoCSV']['tmp_name'];
             $handle = fopen($filename, "r");
             $i=0;
             $date = fgetcsv($handle, 1000, ";");
             

             if ($date[0] != NULL){
             
             while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
             {

            //     var_dump($data[0]);
            //  exit();

                //if($i>=1){
                    try{
                $consulta1 = $this->pdo->prepare('SELECT "idFichaCaracterizacion" from "FichaCaracterizacion" where "NumeroFichaCaracterizacion" = ?');
                $consulta1->execute(array($data[6]));

                $IdFicha = $consulta1->fetch(PDO::FETCH_OBJ);
                $Result = $IdFicha->idFichaCaracterizacion;

                $consultauser = ('INSERT into public."Usuario"("Usuario", "Contrasena", "Rol") values(?,?,?);');
                $Rol = "Aprendiz";
                $this->pdo->prepare($consultauser)->execute(array($data[3], (md5(sha1($data[3]))), $Rol));

                $consulta2 = $this->pdo->prepare('SELECT "idUsuario" from "Usuario" where "Usuario" = ?');
                $consulta2->execute(array($data[3]));

                $IdUser = $consulta2->fetch(PDO::FETCH_OBJ);
                $Result2 = $IdUser->idUsuario;

                $consulta = ('INSERT into public."Aprendiz"("NombresAprendiz", "ApellidosAprendiz","TipoDocumentoAprendiz", "NumeroDocumentoAprendiz", "CorreoElectronicoAprendiz", "CorreoInstitucionalAprendiz", "fk_idFichaCa", "fk_idUsuario") values(?,?,?,?,?,?,?,?);');
                $this->pdo->prepare($consulta)->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $Result, $Result2));
            }catch(Exception $e){
                $_SESSION['PageStateLoad'] = "Mal";
                
            }
            
            
           
                 //}else{
                  //$i++;}
                }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
             
             $_SESSION['PageStateLoad'] = "Bien";
        }  else{
            $_SESSION['PageStateLoad'] = "Mal";
       }
    }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
//ver si esta separado por " , "
             echo "Archivo invalido!";
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