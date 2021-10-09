<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\database;
use PDO;
use PDOException;


class SQLiteConnector implements ConnectorInterface
{
    /**
     * @param array $config
     * @return PDO
     */
    public static function connect(array $config): PDO
    {
        try {
            return new PDO($config['connection-SQLite']);
        } catch (PDOException $e) {
            throw new PDOException("{$e->getMessage()}.");
        }
    }
}
