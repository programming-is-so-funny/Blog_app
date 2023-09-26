<?php

namespace Feature\DB;

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
        $this->connection = new PdoConnection();
    }


    public function test_can_connect_to_db()
    {
        $this->assertNotNull($this->connection->getConnection());
        $this->assertInstanceOf(\PDO::class, $this->connection->getConnection());
    }

    public function test_can_throw_error_on_connect_to_db_exception()
    {
        $this->expectException(ErrorOnConnectToDatabaseException::class);
        $this->connection->getConnection();
    }
}