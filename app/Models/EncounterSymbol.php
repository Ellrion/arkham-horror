<?php

namespace ArkhamHorror\Models;

use MyCLabs\Enum\Enum;

/**
 * @method static EncounterSymbol RED()
 * @method static EncounterSymbol BLUE()
 * @method static EncounterSymbol GREEN()
 * @method static EncounterSymbol YELLOW()
 */
class EncounterSymbol extends Enum
{
    const RED = 'red';
    const BLUE = 'blue';
    const GREEN = 'green';
    const YELLOW = 'yellow';
}