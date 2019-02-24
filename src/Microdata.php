<?php

namespace einfachArchiv\Microdata;

use Jkphl\Micrometa\Ports\Parser;

class Microdata
{
    /**
     * The items.
     *
     * @var \Jkphl\Micrometa\Ports\Item\ItemObjectModel
     */
    protected $items;

    /**
     * @param string $html The HTML document
     */
    public function __construct($html)
    {
        $micrometa = new Parser();
        $this->items = $micrometa('http://example.com', $html);
    }

    /**
     * Returns the found items.
     *
     * @return array
     */
    public function getItemsByType($type)
    {
        $items = [];

        foreach ($this->items as $item) {
            if ($item->isOfType($type)) {
                $className = __NAMESPACE__.'\\Types\\'.$type;

                $items[] = new $className($item);
            }
        }

        return $items;
    }
}
