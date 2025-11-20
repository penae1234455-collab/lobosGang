

<?php
//  NO MOVER
class Database {
    private $host = 'sql112.infinityfree.com';
    private $db_name = 'if0_40461258_lobos';
    private $username = 'if0_40461258';
    private $password = 'AZ7qAyDwtd';
    public $conn;

    public function __construct() {

            // credenciales proporcionadas por el usuario
            $this->host = 'sql112.infinityfree.com';
            $this->db_name = 'if0_40461258_lobos';
            $this->username = 'if0_40461258';
            $this->password = 'AZ7qAyDwtd';
        
    }


    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                $this->username,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4")
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $exception) {


            try {
                $logDir = __DIR__ . '/../logs';
                if (!is_dir($logDir)) {
                    mkdir($logDir, 0755, true);
                }
                $logFile = $logDir . '/db_error.log';
                $msg = date('Y-m-d H:i:s') . " - DB Connection Error: " . $exception->getMessage() . PHP_EOL;
                file_put_contents($logFile, $msg, FILE_APPEND | LOCK_EX);
            } catch (Exception $e) {

            }


            if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost') {
                echo "Error de conexión: " . $exception->getMessage();
            } else {
                echo "❌ Error de conexión a la base de datos.";
            }
        }

        return $this->conn;
    }
}
?>
