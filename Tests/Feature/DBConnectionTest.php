<?php

namespace Tests\Feature;

use App\Business\Utils\Database\DBConnection;
use App\Business\Utils\Exceptions\ErrorOnConnectToDatabaseException;
use App\Database\PdoConnection;
use PHPUnit\Framework\TestCase;

class DBConnectionTest extends TestCase
{
    private DBConnection $connection;

    public function setUp(): void
    {
        parent::setUp();

    }

    /**
     * @throws ErrorOnConnectToDatabaseException
     */
    public function test_can_connect_to_db()
    {
        $this->connection = new PdoConnection(
            driver: $_ENV['DB_CONNECTION'],
            host: $_ENV['DB_HOST'],
            port: $_ENV['DB_PORT'],
            dbName: $_ENV['DB_DATABASE'],
            userName: $_ENV['DB_USERNAME'],
            password: $_ENV['DB_PASSWORD'],
        );
        $this->assertNotNull($this->connection->getConnection());
    }

    public function test_can_throw_error_on_connect_to_db_exception()
    {
        $this->expectException(ErrorOnConnectToDatabaseException::class);
        $this->connection = new PdoConnection(
            driver: "",
            host: "",
            port: "",
            dbName: "",
            userName: "",
            password: "",
        );

        $this->connection->getConnection();
    }
}