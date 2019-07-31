<?php

require_once "modelos/Perfil.php";
require_once "modelos/Usuario.php";
require_once "modelos/Instructor.php";


class PerfilControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Perfil;
        
        
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "index.php";
        require_once "vistas/pie.php";
    }

     public function registrarPerfil(){//Formulario para modificar el perfil
        $titulo=" Modificar";
        //$p=new Perfil();
        $u=new Usuario();
        $u->setRol($_SESSION['Rol']);
        $i=new Instructor();
        $p=$i->ObtenerUsuId(intval($_SESSION["idUsuario"]));
            require_once "vistas/encabezado.php";
            require_once "vistas/Perfil/perfil-form.php";
            require_once "vistas/pie.php";

        // if(isset($_GET['id'])){
        //     $p=$this->modelo->Obtener($_SESSION["idUsuario"]);
        //     $u=$u->Obtener($p->getfk_idUsuario());
        //     $titulo=" Modificar";
        // }

        // require_once "vistas/encabezado.php";
        // require_once "vistas/Perfil/perfil-form.php";
        // require_once "vistas/pie.php";

     }
     public function Guardar(){
        $u=new Usuario();
        $u->setUsuario($_POST['NumeroDocumento']);
        $u->setContrasena(md5(sha1($_POST['NumeroDocumento'])));
        $u->setRol($_POST['Rol']);
        $p=new Instructor();

        if(intval($_POST['id'])>0){
            $p=$p->Obtener(intval($_POST['id']));
            $u->setIdUsuario($p->getfk_idUsuario());
            $idusu=$p->getfk_idUsuario();
            $u->Actualizar($u);
        }else{
            $idusu=$u->Insertar($u);
        }
        
        $p->setidInstructor(intval($_POST['id']));
        $p->setNombresInstructor($_POST['Nombres']);
        $p->setApellidosInstructor($_POST['Apellidos']);
        $p->setTipoDocumentoInstructor($_POST['TipoDocumento']);
        $p->setNumeroDocumentoInstructor(intval($_POST['NumeroDocumento']));
        $p->setCorreoElectronicoInstructor($_POST['CorreoElectronico']);
        $p->setCorreoInstitucionalInstructor($_POST['CorreoInstitucional']);
        $p->setfk_idUsuario(intval($idusu));
       
        $p->getidInstructor() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=instructor");
    }
}