<?php

namespace ArmDevStack\Validator\Rules;

class Alphabetical extends Rule
{
    protected static string $defaultMessage = 'The :attribute may only contain letters.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return ctype_alpha($input);
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
