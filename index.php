<?php

use ArmDevStack\Validator\Exceptions\UndefinedRuleException;
use ArmDevStack\Validator\Rules\Alphabetical;
use ArmDevStack\Validator\Rules\AlphaNumeric;
use ArmDevStack\Validator\Rules\Email;
use ArmDevStack\Validator\Rules\Numeric;
use ArmDevStack\Validator\Rules\Required;
use ArmDevStack\Validator\Validator;

require_once 'vendor/autoload.php';

$attributes = [
    'name' => '',
    'age' => '',
    'email' => '',
    'username' => 'narek1995',
    'password' => '12345678a',
];

$rules = [
    'name' => [new Required],
    'age' => [new Required, new Numeric],
    'email' => [new Email],
    'username' => [new Alphabetical],
    'password' => [new AlphaNumeric],
];

try
{
    $validator = Validator::make($rules, $attributes);

    echo '<pre>';
    print_r($validator->getErrors());
    echo '</pre>';
}
catch (UndefinedRuleException $ex)
{
    echo $ex->getMessage();
}