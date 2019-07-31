<?php

require_once "modelos/Aprendiz.php";
require_once "modelos/Programa.php";
require_once "modelos/Ficha.php";
//este es el de usuario
require_once "modelos/Usuario.php";
require_once "modelos/FichaCaracterizacion.php";


class AprendizControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Aprendiz;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/aprendiz/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarAprendiz(){
        $titulo=" Registrar";
        $p=new Aprendiz();
        //Aca es el usuario
        $u=new Usuario();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        $programa  = new Programa();
        $ficha     = new Ficha();

        require_once "vistas/encabezado.php";
        require_once "vistas/aprendiz/aprendiz-form.php";
        require_once "vistas/pie.php";
        require_once "vistas/aprendiz/consultaAjax.php";
     }
     public function Guardar(){
         //desde aca usuario
        $u=new Usuario();
        $u->setUsuario($_POST['NumeroDocumento']);
        $u->setContrasena(md5(sha1($_POST['NumeroDocumento'])));
        $u->setRol('Aprendiz');

        $idusu=$u->Insertar($u);
            //hasta aca usuario
        $p=new Aprendiz();
        $p->setidAprendiz(intval($_POST['id']));
        $p->setNombresAprendiz($_POST['Nombres']);
        $p->setApellidosAprendiz($_POST['Apellidos']);
        $p->setTipoDocumentoAprendiz($_POST['TipoDocumento']);
        $p->setNumeroDocumentoAprendiz(intval($_POST['NumeroDocumento']));
        $p->setCorreoElectronicoAprendiz($_POST['CorreoElectronico']);
        $p->setCorreoInstitucionalAprendiz($_POST['CorreoInstitucional']);
        $p->setfk_idFichaCa(intval($_POST['FichaCaracterizacion']));
        //desd aca usuariio
        $p->setfk_idUsuario($idusu);
        //hasta aca usuario
        

       // var_dump($p);
        //exit;
       

        $p->getidAprendiz() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
        
        header("location:?c=aprendiz");
    }


    public function AjaxProgramaPorFicha(){
        $FichaC     = new FichaCaracterizacion();
        $idFicha=$_POST['idFicha'];
        $f=$FichaC->Obtener($idFicha);
        echo intval($f->getfk_idProgFormacion());
    }
}