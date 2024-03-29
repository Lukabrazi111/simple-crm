<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownOption extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $idTag, public string $label, public string $selected, public array $data)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown.option', [
            'idTag' => $this->idTag,
            'label' => $this->label,
            'selected' => $this->selected,
            'data' => $this->data
        ]);
    }
}
