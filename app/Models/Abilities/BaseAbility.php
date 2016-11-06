<?php

namespace ArkhamHorror\Models\Abilities;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

abstract class BaseAbility
{
    protected $name;
    protected $description;

    /**
     * @return Htmlable
     */
    public function getDescription()
    {
        return new HtmlString($this->description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
