<?php

namespace App\Rules;

use Closure;
use Carbon\Carbon;
use App\Models\Hourly;
use Illuminate\Contracts\Validation\ValidationRule;

class DateTimeRangeRule implements ValidationRule
{

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $today = Carbon::now()->format('Y-m-d');

        $date = Carbon::createFromFormat('Y-m-d\TH:i', $value);

        if ($date < $today) {
            $fail("La date doit être aujourd'hui ou ultérieure.");

            return;
        }

        $day = Carbon::create($value);
        $hourly = Hourly::where('day', '=', $day->englishDayOfWeek)->first();

        if (null === $hourly) return;

        $dayName = __($hourly->day);

        if ($hourly->lock) {
            $fail("Nous ne sommes pas ouverts le {$dayName}.");
            return;
        }

        $start = Carbon::createFromFormat('H:i:s', $hourly->start);
        $end = Carbon::createFromFormat('H:i:s', $hourly->end);
        $time = Carbon::createFromFormat('H:i:s', $date->format('H:i:s'));

        if ($time->lt($start) || $time->gt($end)) {
            $fail("Le {$dayName} nous sommes ouvert de {$hourly->start} à {$hourly->end}.");
        }
    }
}
