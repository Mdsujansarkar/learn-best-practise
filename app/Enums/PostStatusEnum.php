<?php
declare(strict_types=1);
namespace App\Enums;

enum PostStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';

    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Active Post',
            self::INACTIVE => 'Inactive Post',
            self::PENDING => 'Pending Approval',
        };
    }
}
