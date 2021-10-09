<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/9/2021
 * @project : jumia-exercise
 */

namespace App\value;

class Phone implements valueInterface
{
    private string $phoneNumber;
    private string $countryName;
    private string $countryCode;
    private bool  $validationState;


    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName): void
    {
        $this->countryName = $countryName;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return bool
     */
    public function getValidationState(): bool
    {
        return $this->validationState;
    }

    /**
     * @param bool  $validationState
     */
    public function setValidationState(bool $validationState): void
    {
        $this->validationState = $validationState;
    }
}