<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\helpers;

use PDO;

class QueryBuilder
{
    protected PDO $pdo;

    protected string $table;


    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param string $table
     * @return $this
     */
    public function from(string $table): QueryBuilder
    {
        $this->table = $table;

        return $this;
    }

    /**
     * @param string $attribute
     * @return array
     */
    public function fetchAll(string $attribute): array
    {
        $statement = $this->pdo->prepare("SELECT {$attribute} FROM {$this->table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }
}