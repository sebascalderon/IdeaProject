<?php

require_once "modelos/ProgramaFormacion.php";

class ProgramaFormacionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new ProgramaFormacion;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/ProgramaFormacion/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarProgramaFormacion(){
        $titulo=" Registrar";
        $p=new ProgramaFormacion();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/ProgramaFormacion/ProgramaFormacion-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new ProgramaFormacion();
        $p->setidProgramaFormacion(intval($_POST['id']));
        $p->setNombreProgramaFormacion($_POST['Nombre']);
      
       
        $p->getidProgramaFormacion() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=ProgramaFormacion");
    }
}