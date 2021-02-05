<?php

namespace AldrumoThemes\AldrumoCom\View\Components;

use Illuminate\View\Component;

class DocsLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('AldrumoCom::layouts.docs');
    }
}
