<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\database;
use PDO;
use PDOException;

interface ConnectorInterface
{
    /**
     * Establish a database connection.
     * @param array $config
     * @return PDO
     * @throws PDOException
     */
    public static function connect(array $config): PDO;
}
