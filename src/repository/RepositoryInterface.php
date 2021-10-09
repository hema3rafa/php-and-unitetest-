<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/9/2021
 * @project : jumia-exercise
 */

namespace App\repository;

interface RepositoryInterface
{
    /**
     * @param $data
     * @param array|null $filters
     * @return array
     */
    public static function filter(array $data, array $filters = null): array;
    public static function getAllData(): array;

}