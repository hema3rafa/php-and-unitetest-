<?php

use PHPUnit\Framework\TestCase;
use App\libs\PhoneValidator;

class PhoneValidateTest extends TestCase
{
    const VALIDATOR = [
        'Cameroon' => [
            'code' => '+237',
            'regex' => '\(237\)\ ?[2368]\d{7,8}$'
        ],
        'Ethiopia' => [
            'code' => '+251',
            'regex' => '\(251\)\ ?[1-59]\d{8}$'
        ],
        'Morocco' => [
            'code' => '+212',
            'regex' => '\(212\)\ ?[5-9]\d{8}$'
        ],
        'Mozambique' => [
            'code' => '+258',
            'regex' => '\(258\)\ ?[28]\d{7,8}$'
        ],
        'Uganda' => [
            'code' => '+256',
            'regex' => '\(256\)\ ?\d{9}$'
        ]
    ];


    public function testPhoneNumberValidate(): void
    {

        $phone = ['(237) 697151594'];

        $phoneValidator = new PhoneValidator(self::VALIDATOR);

        $phones = $phoneValidator->normalize($phone);
        $this->assertAttributeEquals(true, 'validationState', $phones[0]->getPhone());

    }
}