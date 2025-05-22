<?php

namespace App\Enums;

use ArchTech\Enums\Values;

enum BookBindingEnum: int
{
    use  Values;

    case SOFT = 1;
    case HARD = 2;

    public function text(): string
    {
        return match ($this) {
            self::SOFT => 'Miękka',
            self::HARD => 'Twarda',
        };
    }
}
