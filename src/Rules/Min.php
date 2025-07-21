<?php

namespace ArmDevStack\Validator\Rules;

class Min extends Rule
{
    protected static string $defaultMessage = 'The :attribute must be at least :min :unit.';
    protected string $unit = '';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        $min = (int)($this->parameters[0] ?? 0);

        $this->unit = 'characters';

        if (function_exists('mb_strlen'))
        {
            return mb_strlen($input, 'UTF-8') >= $min;
        }

        $length = preg_match_all('/./u', $input);

        return $length >= $min;
    }

    /**
     * @param string $attribute
     * @return array
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
            'min' => $this->parameters[0] ?? 0,
            'unit' => $this->unit,
        ];
    }
}