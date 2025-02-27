<?php

namespace sattaribm\MenusManager\Components;

use sattaribm\MenusManager\Item;
use Illuminate\View\Component;

class Divider extends Component
{
    /**
     * The item.
     *
     * @var Item
     */
    public $item;

    /**
     * Create the component instance.
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if ($this->item && $this->item->isVisible()) {
            return view('menus-manager::components.divider');
        }

        return '';
    }
}
