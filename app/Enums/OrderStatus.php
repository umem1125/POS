<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasLabel
{
    case PENDING =  'pending';
    case CANCELLED =  'cancelled';
    case COMPLETED =  'completed';

    public function getLabels(): ?string
    {
        return str($this->value)->title();
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::COMPLETED => 'success',
            self::CANCELLED => 'danger',
        };
    }
}
