<?php

declare (strict_types = 1);

namespace App\Mixins\Html;

class FormErrorElement
{
    /**
     * Automatically mark an input field as invalid when it contains an error.
     *
     * @return \Closure
     */
    public function formError()
    {
        return function (string $field) {
            $errors = session('errors');

            if ($errors && $errors->has($field)) {
                return $this->div($errors->first($field))->class('form-field form-error__message w-100 f7 red');
            }

            return null;
        };
    }
}
