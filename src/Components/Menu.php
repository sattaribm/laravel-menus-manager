<?php

namespace sattaribm\MenusManager\Components;

use sattaribm\MenusManager\Facades\Menus;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * The menu items.
     *
     * @var Collection
     */
    public $items;

    /**
     * The menu.
     *
     * @var string
     */
    public $menu;

    /**
     * Create the component instance.
     *
     * @param mixed $name
     */
    public function __construct($name)
    {
        $this->menu = Menus::get($name);
        $this->items = $this->menu ? $this->menu->items() : collect();
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if ($this->menu) {
            return view('menus-manager::components.menu');
        }

        return '';
    }
}
