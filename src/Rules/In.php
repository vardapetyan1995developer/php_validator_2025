<?php

namespace ArmDevStack\Validator\Rules;

class In extends Rule
{
    protected static string $defaultMessage = 'The selected :attribute is invalid.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return in_array($input, $this->parameters);
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
