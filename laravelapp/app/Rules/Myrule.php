<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($n)
    {
        $this->num = $n;
        //
    }
public function passes($attribute,$value)
    {
        return $value % $this->num == 0;
    }


/**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return  $this->num . 'The validation error message.';
    }
}
