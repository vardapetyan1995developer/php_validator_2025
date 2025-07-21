<?php

namespace ArmDevStack\Validator\Rules;

class AlphaNumeric extends Rule
{
    protected static string $defaultMessage = 'The :attribute may only contain letters and numbers.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return preg_match('/[a-zA-Z]/', $input) && preg_match('/[0-9]/', $input);
    }

    /**
     * @param string $attribute
     * @return string[]
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute
        ];
    }
}