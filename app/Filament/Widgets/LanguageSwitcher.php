<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class LanguageSwitcher extends Widget
{
    protected static string $view = 'filament.widgets.language-switcher';
    protected static ?int $sort = -1; // ताकि यो सबैभन्दा माथि देखियोस्

}
