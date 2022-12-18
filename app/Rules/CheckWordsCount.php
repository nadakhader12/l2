<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckWordsCount implements Rule
{

        protected $c;
        /**
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->c=$count;
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
        return str_word_count($value)>=$this->c;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'عبر زيادة';
    }
}
