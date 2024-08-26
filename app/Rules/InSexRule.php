<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class InSexRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTrangreendString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $sexies = ['M', 'F'];
        if (!in_array($value, $sexies)) {
            $fail("Le champ $attribute doit être soit `homme` soit `Femme` ");
        }
    }
}
