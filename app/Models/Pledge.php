<?php

namespace App\Models;

class Pledge
{
    public const KOBOLD = 'Kobold';
    public const GOBLIN = 'Goblin';
    public const OWLBEAR = 'Owlbear';
    public const WYVERN = 'Wyvern';
    public const ELEMENTAL = 'Elemental';

    /**
     * @return array
     */
    public static function pledges(): array
    {
        return [
            self::KOBOLD => self::KOBOLD,
            self::GOBLIN => self::GOBLIN,
            self::OWLBEAR => self::OWLBEAR,
            self::WYVERN => self::WYVERN,
            self::ELEMENTAL => self::ELEMENTAL,
        ];
    }
}
