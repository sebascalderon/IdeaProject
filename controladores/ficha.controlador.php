<?php

require_once "modelos/Ficha.php";


class FichaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Ficha;
    }

    public function AjaxFichasPorPrograma(){
        $idPrograma=$_POST['idPrograma'];
        foreach($this->modelo->FichaPorPrograma($idPrograma) as $r): ?>
            <option value="<?=$r->idFichaCaracterizacion?>"><?=$r->NumeroFichaCaracterizacion?></option>
        <?php  endforeach;
    }
}