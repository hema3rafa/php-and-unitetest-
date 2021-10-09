<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\libs;

use App\entity\Customer;

class PhoneValidator
{
    protected array $validators;

    public function __construct($validators)
    {
        $this->validators = $validators;    
    }


    public function normalize(array $data): array
    {
        $phonesList = [] ;
        foreach ($data as $key => $value)
        {
            $phoneArray = explode(' ', $value);

            $customer = new Customer();
            $customer->getPhone()->setCountryName($this->getCountry($value));
            $customer->getPhone()->setCountryCode($this->getCode($value));
            $customer->getPhone()->setValidationState($this->getState($value));
            $customer->getPhone()->setPhoneNumber(end($phoneArray));

            $phonesList[$key] = $customer ;

        }

        return $phonesList;
    }

    protected function getCountry(string $value): string
    {
        $country ='';
        foreach ($this->validators as $key => $validator)
        {
            preg_match('/' . substr($validator['regex'], 0, 10) . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $country = $key;
            }
        }

        return $country;
    }

    protected function getState(string $value): bool
    {
        $valid = false;

        foreach ($this->validators as $validator)
        {
            preg_match('/' . $validator['regex'] . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $valid = true;
            }
        }

        return $valid;
    }

    protected function getCode(string $value): string
    {
        $code ="";
        foreach ($this->validators as $validator)
        {
            preg_match('/' . substr($validator['regex'], 0, 10) . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $code = $validator['code'];
            }
        }

        return $code;
    }
}