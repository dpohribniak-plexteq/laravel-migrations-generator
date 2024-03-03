<?php

namespace KitLoong\MigrationsGenerator\Migration\Blueprint;

use KitLoong\MigrationsGenerator\Enum\Migrations\Property\PropertyName;

class Property
{
    /**
     * Property constructor.
     */
    public function __construct(private PropertyName $name, private mixed $value)
    {
    }

    public function getName(): PropertyName
    {
        return $this->name;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }
}
