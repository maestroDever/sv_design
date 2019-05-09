<?php

declare (strict_types = 1);

namespace App\Mixins\Html;

class FormErrorClass
{
    /**
     * Automatically mark an input field as invalid when it contains an error.
     *
     * @return \Closure
     */
    public function highlightOnError()
    {
        return function () {
            if (session('errors') && session('errors')->has($this->getAttribute('name'))) {
                return $this->class('form-error');
            }

            return $this;
        };
    }
}
