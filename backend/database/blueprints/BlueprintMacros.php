<?php

namespace Database\Blueprints;
use Illuminate\Database\Schema\Blueprint;

class BlueprintMacros
{
    public static function register(): void
    {
        Blueprint::macro('dateOfBirth', function (
            string $column = 'birth_date'
        ) {
            return $this->date($column);
        });
    }
}
