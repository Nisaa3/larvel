<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class confirmation extends Component
{
    /**
     * Create a new component instance.
     */
    public string $message;
    public function __construct($message)
    {

        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.confirmation');
    }
}
