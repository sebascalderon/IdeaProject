
<?php

require_once "modelos/Usuario.php";

class UsuarioControlador {

    /**
     *
     * @var Usuario 
     */
    private $modelo;

    public function __construct() {

        $this->modelo = new Usuario();
    }

    public function Inicio() {
        require_once "vistas/encabezado.php";
        require_once "vistas/Usuario/index.php";
        require_once "vistas/pie.php";
    }

    public function FormLogin() {
        //require_once "vistas/Usuario/Login.php";//esta es la vista que se carga sin iniciar sesión, aquí puedes ponder lo que necesitas y dentro de esto poner un modal del login. 
        require_once "vistas/Inicio/template.php";
    }

    public function Iniciar() {//Desde este metodo se inicia sesión
        $Usuario = $this->modelo->Validar($_POST["Usuario"], $_POST["Contrasena"]);

        if ($Usuario) {

            $_SESSION['PageState'] = "";
            $_SESSION['PageStateLoad'] = "";
            header("Location: index.php");
        } else {
            header("location: index.php?Aceptar=error");
        }
    }

    public function Cerrar() {
        session_destroy();
        header("Location:index.php");
    }

    public function Borrar() {
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=usuario");
    }

    public function Bloquear() {
        $this->modelo->Bloquear($_GET["id"]);
        header("location:?c=usuario");
    }

    public function Activo() {
        $this->modelo->Activo($_GET["id"]);
        header("location:?c=usuario");
    }

}
