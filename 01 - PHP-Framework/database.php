<?php
class SingletonDB {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $dotenv = parse_ini_file('.env'); // Read the .env file
        $dbHost = $dotenv['HOST'];
        $dbPort = $dotenv['PORT'];
        $dbName = $dotenv['DATABASE'];
        $dbUser = $dotenv['DB_USERNAME'];
        $dbPass = $dotenv['DB_PASSWORD'];

        // Your database connection logic here
        $this->connection = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName");
        // Adjust connection parameters as per your setup
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new SingletonDB();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>