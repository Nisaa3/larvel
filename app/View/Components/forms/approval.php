<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class approval extends Component
{
    /**
     * Create a new component instance.
     */
    public string $message;
    public string $type; 
    public function __construct($message, $type)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.approval');
    }
}
