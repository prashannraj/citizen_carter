<?php

namespace App\Providers\Filament;

use App\Models\Company;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\App;
use App\Filament\Widgets\LanguageSwitcher;
use Illuminate\Support\Facades\Schema;
use App\Filament\Widgets\ServiceOverviewWidget;

class AuthPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        // 🔸 DB बाट कम्पनी नाम ल्याउने (null भए खाली string)
        $companyName = '';
        $companyAddress = '';
        $companyLogo = '';

        if (Schema::hasTable('companies')) {
            $company = Company::first();
            $companyName = $company?->company_name ?? '';
            $companyAddress = $company?->address ?? '';
            $companyLogo = $company?->logo ? asset('storage/' . $company->logo) : '';
        }
        // 🔸 Panel को नाम र logo सेट गर्ने
        return $panel
            ->default()
            ->id('auth')
            ->path('auth')
            ->login()
            ->brandLogo($companyLogo) // सानो लोगो
            ->brandLogoHeight('36px') // लोगो साइज
            ->brandName($companyName) // ✅ Laravel को सट्टा कम्पनी नाम
            ->colors([
                'primary' => Color::Sky,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                LanguageSwitcher::class,
                \App\Filament\Widgets\ServiceStatsWidget::class,
                Widgets\AccountWidget::class,
               // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

            public function boot(): void
        {
            App::setLocale('ne'); // यो सबै request को लागि default भाषा नेपाली बनाउँछ
        }
}
