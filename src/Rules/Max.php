<?php

namespace ArmDevStack\Validator\Rules;

class Max extends Rule
{
    protected static string $defaultMessage = 'The :attribute may not be greater than :max :unit.';
    protected string $unit = '';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        $max = (int)($this->parameters[0] ?? 0);

        $this->unit = 'characters';

        if (function_exists('mb_strlen'))
        {
            return mb_strlen($input, 'UTF-8') >= $max;
        }

        $length = preg_match_all('/./u', $input);

        return $length <= $max;
    }

    /**
     * @param string $attribute
     * @return array
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
            'max' => $this->parameters[0] ?? 0,
            'unit' => $this->unit,
        ];
    }
}