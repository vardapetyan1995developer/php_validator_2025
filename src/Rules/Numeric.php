<?php

namespace ArmDevStack\Validator\Rules;

class Numeric extends Rule
{
    protected static string $defaultMessage = 'The :attribute must be a number.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return is_numeric($input);
    }

    /**
     * @param string $attribute
     * @return array
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
        ];
    }
}
