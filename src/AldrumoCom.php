<?php

namespace AldrumoThemes\AldrumoCom;

use Aldrumo\ThemeManager\Theme\ThemeBase;
use Illuminate\Support\Facades\Blade;

class AldrumoCom extends ThemeBase
{
    public function boot(): void
    {
        parent::boot();

        $this->serviceProvider->setPublishes(
            [
                __DIR__ . '/../resources/dist' => public_path('aldrumo/aldrumo-com'),
            ],
            'aldrumo-public'
        );
    }
}
