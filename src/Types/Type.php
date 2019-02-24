<?php

namespace einfachArchiv\Microdata\Types;

class Type
{
    /**
     * The item.
     *
     * @var \Jkphl\Micrometa\Ports\Item\Item
     */
    protected $item;

    /**
     * @param \Jkphl\Micrometa\Ports\Item\Item $item The item
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Returns the properties.
     *
     * @return array
     */
    public function getPropertiesByName($name)
    {
        $properties = [];

        foreach ($this->item->getProperties() as $key => $value) {
            if ($key->name == $name) {
                if ($value[0] instanceof \Jkphl\Micrometa\Application\Value\StringValue) {
                    $properties[] = $value[0]->export();
                } elseif ($value[0] instanceof \Jkphl\Micrometa\Application\Value\AlternateValues) {
                    $properties[] = $value[0]->export();
                } elseif ($value[0] instanceof \Jkphl\Micrometa\Ports\Item\Item) {
                    $name = __NAMESPACE__.'\\'.$value[0]->getType()[0]->name;

                    $properties[] = new $name($value[0]);
                } else {
                    $properties[] = $value[0];
                }
            }
        }

        return $properties;
    }

    /**
     * Returns the property.
     *
     * @return mixed
     */
    public function getPropertyByName($name)
    {
        $properties = $this->getPropertiesByName($name);

        return $properties[0] ?? null;
    }

    /**
     * Returns a combination of properties.
     *
     * @return array|null
     */
    public function getCombo($properties)
    {
        $combination = [];

        foreach ($properties as $name => $as) {
            $value = $this->{'get'.ucfirst(is_numeric($name) ? $as : $name)}();

            if (is_null($value)) {
                return null;
            }

            $combination[$as] = $value;
        }

        return $combination;
    }
}
