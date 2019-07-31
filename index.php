<?php

require_once "modelos/basededatos.php";
session_start();
if (isset($_SESSION['Usuario']) || (isset($_POST['Usuario']) && isset($_POST['Contrasena']))) {
    if (!isset($_GET['c'])) {
        require_once "controladores/inicio.controlador.php";
        $controlador = new Iniciocontrolador();
        call_user_func(array($controlador, "Inicio"));
    } else {
        $controlador = $_GET['c'];
        require_once "controladores/$controlador.controlador.php";
        $controlador = ucwords($controlador) . "controlador";
        $controlador = ucwords($_GET['c']) . "Controlador";
        $controlador = new $controlador;
        $action = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador, $action));
    }
} else {
    require_once "controladores/Usuario.controlador.php";
    $controlador = new UsuarioControlador;
    call_user_func(array($controlador, "FormLogin"));
}
//header("location:vistas/Inicio/template.php");
//header("location:vistas/Inicio/template.php");
