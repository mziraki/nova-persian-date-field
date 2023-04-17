<?php

namespace MZiraki\PersianDateField;

use DateTimeInterface;
use Exception;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class PersianDateTime extends Field
{
    use HasOptions;
    use SupportsDependentFields;

    public $component = 'persian-date-time';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct(
            $name,
            $attribute,
            $resolveCallback ?? function ($value) {
                if (!is_null($value)) {
                    if ($value instanceof DateTimeInterface) {
                        return $value->format('Y-m-d H:i:s');
                    }

                    throw new Exception("DateTime field must cast to 'datetime' in Eloquent model.");
                }
            }
        );
    }
}
