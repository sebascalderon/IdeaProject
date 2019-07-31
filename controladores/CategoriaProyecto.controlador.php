<?php

require_once "modelos/CategoriaProyecto.php";

class CategoriaProyectoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new CategoriaProyecto;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/CategoriaProyecto/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarCategoriaProyecto(){
        $titulo=" Registrar";
        $p=new CategoriaProyecto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/CategoriaProyecto/CategoriaProyecto-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new CategoriaProyecto();
        $p->setidCategoriaProyecto(intval($_POST['id']));
        $p->setNombreCategoriaProyecto($_POST['Nombre']);
      
       
        $p->getidCategoriaProyecto() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=CategoriaProyecto");
    }
}