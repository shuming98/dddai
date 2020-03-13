<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SendMobile implements Rule
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
        $patt = '/1[3578]\d{9}/';
        return preg_match($patt,$value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '手机字段不符合规则';
    }
}
