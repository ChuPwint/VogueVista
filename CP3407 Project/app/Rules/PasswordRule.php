<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PasswordRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check for at least one uppercase letter
        if (!preg_match('/[A-Z]/', $value)) {
            $fail("The password must contain at least one uppercase letter.");
        }

        // Check for at least one symbol
        if (!preg_match('/[\W_]/', $value)) { // \W matches any non-word character
            $fail("The password must contain at least one symbol.");
        }

        // Check for at least one number
        if (!preg_match('/[0-9]/', $value)) {
            $fail("The password must contain at least one number.");
        }
    }
}
