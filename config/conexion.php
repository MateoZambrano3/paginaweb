<?php
class Conectar {
    protected $dbh;

    protected function Conexion() {
        try {
            $host = "localhost";
            $dbname = "Paginamz";
            $user = "root";
            $pass = ""; // Cambia esto si tu base de datos tiene una contraseña

            $this->dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->dbh;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    // Método para devolver la URL base
    public static function ruta() { 
        return "http://localhost/Paginamz/views/"; // Ajusta si usas otro puerto o directorio
    }
}
?>
