<?php

namespace ArmDevStack\Validator\Rules\Interfaces;

interface RuleInterface
{
    /**
     * Validate given value and return bool.
     *
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool;

    /**
     * Return validation message
     *
     * @param string $attribute
     * @return string
     */
    public function message(string $attribute): string;
}