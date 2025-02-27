<?php

namespace sattaribm\MenusManager\Components;

use sattaribm\MenusManager\Item;
use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * The item icon.
     *
     * @var string
     */
    public $icon;

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
        $this->icon = $item && $item->hasIcon() ? $item->icon : null;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if ($this->item && $this->icon) {
            return view('menus-manager::components.icon');
        }

        return '';
    }
}
