<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\helpers;

class Controller
{
    /**
     * @param string $pageName
     * @param array $pageData
     * @return int
     */
    protected function view(string $pageName, array $pageData): int
    {
        extract($pageData);

        return require "../resources/views/$pageName.php";
    }
}