<?php

namespace App\Rules;

use Closure;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;

class BetweenDateHappyRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTrangreendString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $birthdate = Carbon::parse($value);

        $age = $birthdate->age;

        $has =  ($age > 0 && $age < 18) || ($age >= 18 && $age > 70);

        if ($has) {
            $fail("Le champ $attribute doit correspondre à un âge valide : supérieur à 18 ans ou compris entre 18 et 60 ans.");
        }
    }
}
