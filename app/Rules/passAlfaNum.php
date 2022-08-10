<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class passAlfaNum implements Rule
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
        $letters = preg_match('@[A-Z]@', $value); // verificamos que posea letras
        $number = preg_match('@[0-9]@', $value); // verificamos que posea numeros

    return $letters && $number;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'la contraseña debe tener al menos una letra mayuscula y un número.';
    }
}
