
<?php

class Usuario {

    /**
     *
     * @var PDO 
     */
    private $pdo;
    private $Rol;
    private $Usuario;
    private $Contrasena;
    private $idUsuario;
    private $Estados;

    public function __CONSTRUCT() {
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function setUsuario(string $Usuario) {
        $this->Usuario = $Usuario;
    }

    public function getContrasena() {
        return $this->Contrasena;
    }

    public function setContrasena(string $Contrasena) {
        $this->Contrasena = $Contrasena;
    }

    public function setIdUsuario(int $id) {
        $this->idUsuario = $id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getRol() {
        return $this->Rol;
    }

    public function setRol(string $Rol) {
        $this->Rol = $Rol;
    }

    public function getEstados() {
        return $this->Estados;
    }

    public function setEstados(string $Estados) {
        $this->Estados = $Estados;
    }

    public function Obtener($id) {
        try {

            $consulta = $this->pdo->prepare('SELECT * FROM "Usuario" WHERE "idUsuario"=?;');
            $consulta->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $u = new Usuario();
            $u->setUsuario($r->Usuario);
            $u->setContrasena($r->Contrasena);
            $u->setRol($r->Rol);
            $u->setEstados($r->Estados);

            return $u;
        } catch (Exeption $e) {
            die($e->getMessage());
        }
    }

    public function Insertar(Usuario $p) {

        try {

            $consulta = ('INSERT INTO Public."Usuario" ( "Usuario", "Contrasena", "Rol")
		 VALUES (?,?,?);');
            //validar contraseña encriptada
            //validar contraseña encriptada
            $this->pdo->prepare($consulta)->execute(array(
                $p->getUsuario(),
                $p->getContrasena(),
                $p->getRol()
            ));
            $id = $this->pdo->lastInsertId();
            return $id;
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Usuario $p) {

        try {

            $consulta = ('UPDATE "Usuario" SET "Usuario"=?, "Contrasena"=?,"Rol"=? WHERE "idUsuario"=?;');

            $this->pdo->prepare($consulta)->execute(array(
                $p->getUsuario(),
                $p->getContrasena(),
                $p->getRol(),
                $p->getIdUsuario()
            ));

        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    public function ValideOldPass($idIns, $ContrasenaAntes){
        try{


        $consulta1 = $this->pdo->prepare('SELECT "fk_idUsuario" FROM "Instructor" where "idInstructor" = ?');
        $consulta1->execute(array($idIns));

        $resultado1 = $consulta1->fetch(PDO::FETCH_OBJ);

        $_SESSION['Valide'] = $resultado1->fk_idUsuario;
        $IdUser = $_SESSION['Valide'];
        
        $consulta = $this->pdo->prepare('SELECT Us."Contrasena" FROM "Usuario" Us join "Instructor" Ins on Us."idUsuario" = Ins."fk_idUsuario" WHERE Ins."fk_idUsuario" = ? AND  Us."Contrasena" = ?');

        $Encriptada = md5(sha1($ContrasenaAntes));
        $consulta->execute(array($IdUser, $Encriptada));
        $resultado = $consulta->fetch(PDO::FETCH_OBJ);

        return $resultado;


    }catch(Exception $e) {
        die($e->getMessage());

        return false;
    }
}

    public function Validar($Usuario, $Contrasena) {
        $consulta = $this->pdo->prepare('SELECT * FROM "Usuario"
		 LEFT JOIN "Aprendiz" ON "idUsuario"="Aprendiz"."fk_idUsuario"
		 LEFT JOIN "Instructor" ON "idUsuario"="Instructor"."fk_idUsuario"
		 WHERE "Usuario"=? AND "Contrasena"=?  AND "Estados"=? ');


//validar contraseña encriptada
        $contrasenaen = md5(sha1($Contrasena));
//validar contraseña encriptada
        $consulta->execute(array($Usuario, $contrasenaen, 'Activo'));
        $resultado = $consulta->fetch(PDO::FETCH_OBJ);

        print_r($resultado);


        if (!empty($resultado)) {
            $_SESSION['idUsuario'] = $resultado->idUsuario;
            $_SESSION['Usuario'] = $resultado->Usuario;
            $_SESSION['Contrasena'] = $resultado->Contrasena;
            $_SESSION['Rol'] = $resultado->Rol;


          
                if ($resultado->Rol == "Instructor") {
                    $_SESSION['Rol'] = "Instructor";
                    //echo "instructor";
                } elseif ($resultado->Rol == "Aprendiz") {
                    $_SESSION['Rol'] = "Aprendiz";
                    //echo "aprendiz";
                }elseif ($resultado->Rol == "Administrador") {
                    $_SESSION['Rol'] = "Administrador";
                    //echo "aprendiz";
                } else {
                    session_destroy();

                    return false;
                    //echo "error";
                }


                return true;
           
            
        } else {
            session_destroy();

            return false;
        }
    }

    public function Eliminar($id) {
        try {
            $consulta = ('DELETE FROM "Usuario" WHERE "idUsuario"=?;');
            $this->pdo->prepare($consulta)->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }

// var_dump($id);
// exit(); 
    }

    public function Bloquear($id) {
        try {
            $consulta = ('UPDATE "Usuario" SET  "Estados"=:estado WHERE "idUsuario"=:id;');
            $this->pdo->prepare($consulta)->execute(array('id' => $id, 'estado' => 'Bloqueado'));
        } catch (Exception $e) {
            die($e->getMessage());
        }

// var_dump($id); 
// exit();
    }

    public function Activo($id) {
        try {
            $consulta = ('UPDATE "Usuario" SET  "Estados"=:estado WHERE "idUsuario"=:id;');
            $this->pdo->prepare($consulta)->execute(array('id' => $id, 'estado' => 'Activo'));
        } catch (Exeception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Bloquea a todos los usuarios que pertenecen a una ficha
     * @param int $idFicha
     * @param string $estado
     */
    public function BloquearUsuarios($idFichaCaracterizacion, $estado) {
        try {
            $consulta = ('UPDATE "Usuario"
					SET "Estados" = :estado
					FROM (SELECT *
						FROM "Aprendiz" apre
								INNER JOIN "FichaCaracterizacion" ficha on apre."fk_idFichaCa" = ficha."idFichaCaracterizacion"
						WHERE apre."fk_idFichaCa" = :ficha) as info
					WHERE info."fk_idUsuario" = "Usuario"."idUsuario" ');
            $this->pdo->prepare($consulta)->execute(array('ficha' => $idFichaCaracterizacion, 'estado' => $estado));
        } catch (Exeception $e) {
            die($e->getMessage());
        }

// var_dump($id);
// exit();
    }

    public function Listar() {
        try {
            $consulta = $this->pdo->prepare('SELECT * FROM "Usuario";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exeption $e) {
            die($e->getMessage());
        }
    }

}
