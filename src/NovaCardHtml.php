<?php

namespace EfrainSalas\NovaCardHtml;

use Laravel\Nova\Card;

class NovaCardHtml extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-card-html';
    }

    public function html(string $html)
    {
        return $this->withMeta(['html' => $html]);
    }
}
