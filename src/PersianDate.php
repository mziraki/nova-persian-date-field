<?php

namespace MZiraki\PersianDateField;

use DateTimeInterface;
use Exception;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class PersianDate extends Field
{
    use HasOptions;
    use SupportsDependentFields;

    public $component = 'persian-date';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct(
            $name,
            $attribute,
            $resolveCallback ?? function ($value) {
                if (!is_null($value)) {
                    if ($value instanceof DateTimeInterface) {
                        return $value->format('Y-m-d');
                    }

                    throw new Exception("Date field must cast to 'date' in Eloquent model.");
                }
            }
        );
    }
}
