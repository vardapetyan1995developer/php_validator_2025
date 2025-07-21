<?php

namespace ArmDevStack\Validator\Rules;

class Boolean extends Rule
{
    protected static string $defaultMessage = 'The :attribute field must be true or false.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return in_array(strtolower($input), ['true', 'false', '1', '0', 1, 0], true);
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