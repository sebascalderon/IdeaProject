<?php

require_once "modelos/contrasena.php";
require_once "modelos/Usuario.php";
require_once "modelos/Instructor.php";


class contrasenaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new contrasena;
        
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/contrasena/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarcontrasena(){//Formulario para modificar el contrasena
        
        
        $titulo=" Modificar";
        //$p=new contrasena();
        $u=new Usuario();
        $u->setUsuario($_SESSION['Usuario']);
        $u->setContrasena($_SESSION['Contrasena']);
        $u->setRol($_SESSION['Rol']);
        
        $i=new Instructor();
        $p=$i->ObtenerUsuId(intval($_SESSION["idUsuario"]));
            require_once "vistas/encabezado.php";
            require_once "vistas/contrasena/contrasena-form.php";
            require_once "vistas/pie.php";
            

        // if(isset($_GET['id'])){
        //     $p=$this->modelo->Obtener($_SESSION["idUsuario"]);
        //     $u=$u->Obtener($p->getfk_idUsuario());
        //     $titulo=" Modificar";
        // }

        // require_once "vistas/encabezado.php";
        // require_once "vistas/contrasena/contrasena-form.php";
        // require_once "vistas/pie.php";

     }
     public function Guardar(){
        $u=new Usuario();
        $u->setUsuario($_POST['Usuario']);
        $u->setContrasena(md5(sha1($_POST['Contrasena'])));
        $u->setRol($_POST['Rol']);
        $p=new Instructor();

        if(intval($_POST['id'])>0){
            $p=$p->Obtener(intval($_POST['id']));
            $u->setIdUsuario($p->getfk_idUsuario());
            $idusu=$p->getfk_idUsuario();
            //var_dump();
            //exit();

            if(($_POST['ConfirmContrasena']) == ($_POST['Contrasena']) ){
            if(($u->ValideOldPass((intval($_POST['id'])), ($_POST['ContrasenaAntes']))) == NULL){
                $_SESSION['PageState'] = "Mal";
            }else{
                $u->Actualizar($u);
                $_SESSION['PageState'] = "Bien";
            }}else{
                $_SESSION['PageState'] = "Mal2";
            }
                
        }else{
            $idusu=$u->Insertar($u);
        }
         
        
        
        $p->getidInstructor() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
        
        header("Location:?c=contrasena&a=registrarContrasena#");
    }
}


        