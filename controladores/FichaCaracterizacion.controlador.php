<?php

require_once "modelos/FichaCaracterizacion.php";
require_once "modelos/Programaf.php";
require_once "modelos/Instruc.php";
require_once "modelos/Usuario.php";

class FichaCaracterizacionControlador {

    private $modelo;

    public function __CONSTRUCT() {
        $this->modelo = new FichaCaracterizacion;
    }

    public function Inicio() {
        require_once "vistas/encabezado.php";
        require_once "vistas/FichaCaracterizacion/index.php";
        require_once "vistas/pie.php";
    }

    public function registrarFichaCaracterizacion() {
        $titulo = " Registrar";
        $p = new FichaCaracterizacion();
        if (isset($_GET['id'])) {
            $p = $this->modelo->Obtener($_GET['id']);
            $titulo = " Modificar";
        }
        $programaf = new Programaf();
        $instruc = new Instruc();

        require_once "vistas/encabezado.php";
        require_once "vistas/FichaCaracterizacion/FichaCaracterizacion-form.php";
        require_once "vistas/pie.php";
        require_once "vistas/FichaCaracterizacion/scripts.php";
    }

    public function Guardar() {

        $p = new FichaCaracterizacion();
        $p->setidFichaCaracterizacion(intval($_POST['id']));
        $p->setNumeroFichaCaracterizacion(intval($_POST['Numero']));
        $p->setFechaInicioFichaCaracterizacion($_POST['FechaInicio']);
        $p->setFechaFinFichaCaracterizacion($_POST['FechaFin']);
        $p->setfk_idProgFormacion(intval($_POST['ProgramaFormacion']));
        $p->setfk_idInstructor(intval($_POST['InstructorFicha']));

        $p->getidFichaCaracterizacion() > 0 ? $this->modelo->Actualizar($p) : $this->modelo->Insertar($p);

        header("location:?c=FichaCaracterizacion");
    }

    public function Estados() {//activar o bloquear ficha
        $idFichaCaracterizacion = $_GET['id'];
        $estado = $_GET['estado'];
        $estadoFicha = ($estado == 1) ? 'Activo' : ('Bloqueado');
        $objFichaCaracterizacion = new FichaCaracterizacion();
        $objFichaCaracterizacion->Estados($idFichaCaracterizacion, $estadoFicha);
        $objUsuario = new Usuario();
        $objUsuario->BloquearUsuarios($idFichaCaracterizacion, $estadoFicha);
        //$this->modelo->Bloquear($_GET["id"]);
        header("location:?c=FichaCaracterizacion");
    }
}
