<?php



require_once "modelos/Proyecto.php";
require_once "modelos/Categoria.php";
require_once "modelos/Autor.php";

class ProyectoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Proyecto;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/Proyecto/index.php";
        require_once "vistas/pie.php";
    }
    public function registrarProyecto(){
        $titulo=" Registrar";
        $p=new Proyecto();       
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }
        $categoria= new Categoria();
        $autor= new Autor();
        
        require_once "vistas/encabezado.php";
        require_once "vistas/Proyecto/Proyecto-form.php";
        require_once "vistas/pie.php";
        require_once "vistas/Proyecto/scripts.php";
     }
 
     public function Guardar(){

        $p=new Proyecto();
        $p->setidProyecto(intval($_POST['id']));
        $p->setNombreProyecto($_POST['Nombre']);
        //$p->setManualUsuarioProyecto($_FILES['ManualUsuario']['tmp_name']);
        //$p->setManualInstalacionProyecto($_FILES['ManualInstalacion']['tmp_name']);
        $p->setFechaProyecto($_POST['Fecha']);
        //$p->setCodigoFuenteProyecto($_FILES['CodigoFuente']['tmp_name']);
        $p->setDescripcionProyecto($_POST['Descripcion']);
        $p->setfk_idcatProyecto($_POST['CategoriaProyecto']);
        //$p->setDocumentoProyecto($_FILES['Documento']['tmp_name']);
        $p->setPalabrasClaveProyecto($_POST['PalabrasClave']);
        $p->setCalificacion($_POST['Calificacion']);
        $p->setComentario($_POST['Comentario']);
        $p->setfk_idAprendiz($_POST['fk_idAprendiz']);



        $Nombre=($_POST['Nombre']);
        
        date_default_timezone_set('America/Bogota');
        $fecha=date("(d-m-y)-(H.i.s)");   


        //esta es la ubicacion temporal de archivos manual de usuario   
        $NarchivoMU=($_FILES['ManualUsuario']['name']);
        $tipoArchivo=$_FILES['ManualUsuario']['type'];
        $extension=strpos($_FILES['ManualUsuario']['type'],"/");
        $extension=  substr($_FILES['ManualUsuario']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['ManualUsuario']['tmp_name'];   
        $ubicacion = "Almacenamiento/ManualesUsuario/";
        $ubicacionFinal=$ubicacion.$_FILES['ManualUsuario']['name'];

        $encabezadoNombre=$NarchivoMU."-".$Nombre."-".$fecha.".".$extension;  
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setManualUsuarioProyecto($ubicacionFinal);

      
        //esta es la ubicacion temporal de archivos manual de instalacion   

        $NarchivoMI=($_FILES['ManualInstalacion']['name']);
        $tipoArchivo=$_FILES['ManualInstalacion']['type'];
        $extension=strpos($_FILES['ManualInstalacion']['type'],"/");
        $extension=  substr($_FILES['ManualInstalacion']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['ManualInstalacion']['tmp_name'];   
        $ubicacion = "Almacenamiento/ManualesInstalacion/";
        $ubicacionFinal=$ubicacion.$_FILES['ManualInstalacion']['name'];

        $encabezadoNombre=$NarchivoMI."-".$Nombre."-".$fecha.".".$extension;  
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setManualInstalacionProyecto($ubicacionFinal);



        //esta es la ubicacion temporal de Documento 

        $NarchivoD=($_FILES['Documento']['name']);

        $tipoArchivo=$_FILES['Documento']['type'];
        $extension=strpos($_FILES['Documento']['type'],"/");
        $extension=  substr($_FILES['Documento']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['Documento']['tmp_name'];   
        $ubicacion = "Almacenamiento/Documentacion/";
        $ubicacionFinal=$ubicacion.$_FILES['Documento']['name'];

        $encabezadoNombre=$NarchivoD."-".$Nombre."-".$fecha.".".$extension;  
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setDocumentoProyecto($ubicacionFinal);





        //esta es la ubicacion temporal de codigo fuente 

        //$NarchivoCF=($_FILES['CodigoFuente']['name']);
        $tipoArchivo=$_FILES['CodigoFuente']['type'];
        $extension=strpos($_FILES['CodigoFuente']['type'],"/");
        $extension=  substr($_FILES['CodigoFuente']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['CodigoFuente']['tmp_name'];   
        $ubicacion = "Almacenamiento/Programa/";
        $ubicacionFinal=$ubicacion.$_FILES['CodigoFuente']['name'];
        if(($_FILES['CodigoFuente']['name']) != ""){
        $encabezadoNombre=$Nombre."-".$fecha.".rar";
        }else{
        $encabezadoNombre=$Nombre."-".$fecha.".txt";
        }
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setCodigoFuenteProyecto($ubicacionFinal);








        //var_dump($p);
        //exit;
       
        $p->getidProyecto() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);

        header("location:?c=proyecto");
    }

}