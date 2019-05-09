<?php

declare (strict_types = 1);

namespace App\Providers;

use App\Html\Editor;
use App\Mixins\Html\FormErrorClass;
use App\Mixins\Html\FormErrorElement;
use Illuminate\Support\ServiceProvider;
use Spatie\Html\Elements\File;
use Spatie\Html\Elements\Input;
use Spatie\Html\Elements\Select;
use Spatie\Html\Elements\Textarea;
use Spatie\Html\Html;
use Store\Enums\VatPercentages;

class HtmlMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot(): void
    {
        Html::mixin(new FormErrorElement);

        Input::mixin(new FormErrorClass);
        Textarea::mixin(new FormErrorClass);
        Select::mixin(new FormErrorClass);
        File::mixin(new FormErrorClass);

        Html::macro('vat', function (string $name = 'vat_percentage') {
            $options = collect(VatPercentages::enums())->mapWithKeys(function (float $percentage) {
                return [(string)$percentage => $percentage . '%'];
            });

            return $this->select($name, $options, $this->old($name) ?? 21);
        });

        Html::macro('editor', function (string $name, ?string $value = null) {
            return Editor::create()
                ->attributeIf($name, 'name', $this->fieldName($name))
                ->attributeIf($name, 'id', $this->fieldName($name))
                ->value($this->old($name, $value));
        });
    }
}
