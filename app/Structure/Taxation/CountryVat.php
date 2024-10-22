<?php

namespace App\Structure\Taxation;

use Remote\Xinvoice\Models\Enums\Countries\CountryAlpha2;

enum CountryVat: string
{
    case DE = "DE";
    case CH = "C";
    case AT = "AT";

    public static function fromCountry(string|CountryAlpha2 $code): CountryVat
    {
        if (is_string($code)) {
            $code = self::tryFrom(strtoupper($code));
        } else {
            $code = self::tryFrom($code->value);
        }
        return $code??self::DE;
    }

    public function vat_sets(): array
    {
        return match ($this) {
            self::DE => [
                new Vat(19, __('globals.vat.standard'), false),
                new Vat(7, __('globals.vat.reduced'), true),
                new Vat(0, __('globals.vat.exempt'), false),
            ],
            self::CH => [
                new Vat(7.7, __('globals.vat.standard'), false),
                new Vat(2.5, __('globals.vat.reduced'), true),
                new Vat(3.7, __('globals.vat.extra'), false),
                new Vat(0, __('globals.vat.exempt'), false),
            ],
            self::AT => [
                new Vat(20, __('globals.vat.standard'), false),
                new Vat(10, __('globals.vat.reduced'), true),
                new Vat(13, __('globals.vat.extra'), false),
                new Vat(0, __('globals.vat.exempt'), false),
            ],
        };
    }

    public function default(): Vat
    {
        return match ($this) {
            self::DE => new Vat(19, __('globals.vat.standard'), false),
            self::AT => new Vat(20, __('globals.vat.standard'), false),
            self::CH => new Vat(7.7, __('globals.vat.standard'), false),
        };
    }
}
