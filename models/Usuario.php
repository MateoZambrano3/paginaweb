<?php
class Usuario extends Conectar {
    public function login() {
        $conectar = parent::Conexion();
        parent::set_names();
        // Verificar si se enviaron datos desde el formulario
        if (isset($_POST["correo"]) && isset($_POST["passwd"])) {
            $correo = trim($_POST["correo"]);
            $password = trim($_POST["passwd"]);
            // Validar campos vacíos
            if (empty($correo) || empty($password)) {
                header("Location: ../views/login.php?m=2");
                exit();
            }
            // Consulta para verificar credenciales
            $sql = "SELECT * FROM usuario WHERE usu_correo = ? AND usu_pass = ? AND est = 1";
            $stmt = $conectar->prepare($sql);
            $stmt->bindParam(1, $correo);
            $stmt->bindParam(2, $password);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                // Credenciales correctas: iniciar sesión
                session_start();
                $_SESSION["usu_id"] = $resultado["usu_id"];
                $_SESSION["nombre"] = $resultado["usu_nom"];
                header("Location: ../views/home.php");
                exit();
            } else {
                // Credenciales incorrectas
                header("Location: ../views/login.php?m=1");
                exit();
            }
        }
    }
}
?>
