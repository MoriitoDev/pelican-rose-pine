<?php

namespace Mori\RosePineTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;

class RosePineThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'rose-pine-theme';
    }

public function register(Panel $panel): void
{
    $customCss = Css::make('rose-pine-stylesheet', __DIR__ . '/../resources/css/theme.css');

    $panel
        ->colors([
            'danger'  => '#eb6f92',
            'info'    => '#31748f',
            'primary' => '#ebbcba',
            'success' => '#9ccfd8',
            'warning' => '#f6c177',
        ])
        ->assets([
            $customCss,
        ]);
}

    public function boot(Panel $panel): void
    {
        //
    }
}