<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ScholarshipsTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $scholarships;

    public function __construct($scholarships)
    {
        $this->scholarships = $scholarships;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.scholarships-table');
    }
}
