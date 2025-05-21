<x-filament-widgets::widget>
    <x-filament::section>
            <div style="text-align: right; padding: 1rem;">
                <form action="" method="GET">
                    <select onchange="window.location.href='/lang/' + this.value" style="padding: 0.3rem 0.6rem; font-size: 14px;">
                        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                        <option value="ne" {{ app()->getLocale() === 'ne' ? 'selected' : '' }}>नेपाली</option>
                    </select>
                </form>
            </div>

    </x-filament::section>
</x-filament-widgets::widget>
