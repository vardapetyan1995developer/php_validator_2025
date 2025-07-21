<?php

namespace ArmDevStack\Validator;

use ArmDevStack\Validator\Core\ValidatorEngine as BaseValidator;
use ArmDevStack\Validator\Exceptions\UndefinedRuleException;

class Validator
{
    /**
     * @param array $rules
     * @param array $attributes
     * @return BaseValidator
     * @throws UndefinedRuleException
     */
    public static function make(array $rules, array $attributes): BaseValidator
    {
        return (new BaseValidator)
            ->setRules($rules)
            ->setAttributes($attributes)
            ->handle();
    }
}