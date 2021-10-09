<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\helpers;

class Request
{
    /**
     * @return string
     */
    public static function getURI(): string
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    /**
     * @return string
     */
    public static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return array
     */
    public static function getRequestParameters(): array
    {
        return array_filter($_GET);
    }
}