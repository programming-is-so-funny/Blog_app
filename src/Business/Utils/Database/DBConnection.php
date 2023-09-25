<?php

namespace App\Business\Utils\Database;

use PDO;

interface DBConnection
{
    public function getConnection(): PDO;

}