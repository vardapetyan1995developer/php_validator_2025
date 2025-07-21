<?php

namespace ArmDevStack\Validator\Rules;

class Url extends Rule
{
    protected static string $defaultMessage = 'The :attribute must be a valid URL.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return filter_var($input, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * @param string $attribute
     * @return string[]
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
        ];
    }
}
