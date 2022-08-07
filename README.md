# Laravel Nova Persian Date Field

A persian/jalali date/datetime resource field for Laravel Nova

## Requirements

- `php: ^8.0`
- `laravel/nova: ^4.0`

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require mziraki/nova-persian-date-field
```

## Usage

Add the field to your resource in the ```fields``` method:

```php
use MZiraki\PersianDateField\PersianDate;
use MZiraki\PersianDateField\PersianDateTime;

PersianDate::make('DueOn')
    ->color('rgb(30, 136, 229)') // customize color
    ->format('jYYYY/jMM/jDD') // customize display format
    ->locale('fa,en'), // customize locale

PersianDateTime::make('PublishedAt')
    ->color('rgb(30, 136, 229)') // customize color
    ->format('jYYYY/jMM/jDD HH:mm:ss') // customize display format
    ->locale('fa,en'), // customize locale
```

The field extends the `Laravel\Nova\Fields\Field` field, so all the usual methods are available.

It is recommended that you include the standard `date_format` validation rule, as it is not automatically added.

## Credits

- [Vue Persian DateTime Picker](https://github.com/talkhabi/vue3-persian-datetime-picker)
