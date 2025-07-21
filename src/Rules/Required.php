<?php

namespace ArmDevStack\Validator\Rules;

class Required extends Rule
{
    protected static string $defaultMessage = 'The :attribute field is required.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return trim($input) !== '';
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
