<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Jobs;
use App\Rules\Carbon;

class NoDuplicate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //TODO fix this
        $date = strtotime("-2 days");
        $date = date("Y/m/d", $date);
        $jobs = Jobs::where('created_at', '>=', $date)->get();
        
        $is_no_duplicate = true; 
        foreach ($jobs as $job) {
            if ($value && $job->short_description == $value) {
                $is_no_duplicate = false;
            }
        }

        return $is_no_duplicate;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Job seems already been posted...';
    }
}
