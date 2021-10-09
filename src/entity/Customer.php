<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/9/2021
 * @project : jumia-exercise
 */

namespace App\entity;

use App\value\Phone;
use JetBrains\PhpStorm\Pure;

class Customer implements EntityInterface
{
    private string $name;
    private Phone $phone;

    /**
     */
    public function __construct()
    {
        $this->phone = new Phone();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Phone
     */
    public function getPhone(): Phone
    {
        return $this->phone;
    }

    /**
     * @param Phone $phone
     */
    public function setPhone(Phone $phone): void
    {
        $this->phone = $phone;
    }


}
