<?php

namespace App\Database;

use App\Business\Utils\Database\DBConnection;
use App\Business\Utils\Exceptions\ErrorOnConnectToDatabaseException;
use Exception;
use PDO;
use PDOException;

class PdoConnection implements DBConnection
{
    private PDO $connection;

    private string $driver;
    private string $host;
    private string $port;
    private string $dbName;
    private string $userName;
    private string $password;

    /**
     * @throws ErrorOnConnectToDatabaseException
     */
    public function __construct()
    {
        try {

            $this->initializeEnvironmentVariables();

            $dsn = $this->driver . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbName;
            $this->connection = new PDO(
                dsn: $dsn,
                username: $this->userName,
                password: $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException|Exception $exception) {
            throw new ErrorOnConnectToDatabaseException($exception->getMessage());
        }
    }

    /**
     * @return void
     */
    private function initializeEnvironmentVariables(): void
    {
        $this->driver = $_ENV['DB_CONNECTION'];
        $this->host = $_ENV['DB_HOST'];
        $this->port = $_ENV['DB_PORT'];
        $this->dbName = $_ENV['DB_DATABASE'];
        $this->userName = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
    }

    /**
     * @return PDO
     */
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}