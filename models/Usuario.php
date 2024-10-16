
<?php

class Usuario extends Conectar
{

    public function login()
    {
        $conectar = parent::conexion();
        parent::set_name();
        if (isset($_POST["enviar"])) {
            $correo = $_POST["usu_correo"];
            $password = $_POST["usu_pass"];
            if (empty($password) and empty($correo)) {
                header("location:" . $this->ruta() . "index.php?m=2");
                exit();
            } else {
                // Consulta SQL con placeholders
                $sql = "SELECT * FROM tm_usuario WHERE usu_correo = :correo AND usu_pass = :password AND estado = 1";
                $stmt = $conectar->prepare($sql);
                
                // Vincula los parámetros con los valores correspondientes
                $stmt->bindValue(":correo", $correo);
                $stmt->bindValue(":password", $password);
                
                // Ejecuta la consulta
                $stmt->execute();
                $resultado = $stmt->fetch();
                if (is_array( $resultado ) AND count($resultado) > 0) {
                    $_SESSION["usu_id"] = $resultado["usu_id"];
                    $_SESSION["usu_nom"] = $resultado["usu_nom"];
                    $_SESSION["usu_ape"] = $resultado["usu_ape"];

                    header("location:". $this->ruta() . "view/home/");
                    exit();
                }else{
                    header("location:". $this->ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }
}
?>