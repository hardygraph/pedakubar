<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('spdadmin')
            // ->brandLogo(
            //     auth()->check()
            //         ? false
            //         : asset('frontend/images/pictures/logokubar.png')
            // )
            // ->brandLogoHeight('3rem')
            ->brandName('Sipedakubar')
            ->favicon(asset('frontend/images/pictures/logokubar.png'))
            ->login()
            ->profile()
            ->spa()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
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
            ]) ->navigationGroups([
                NavigationGroup::make()
                    ->label('Beranda')
                    ->collapsed(true),
                NavigationGroup::make()
                    ->label('Pengumuman')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Event')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Pemondokan')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Direktori')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Daftar Peserta')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Settings')
                    ->collapsed(),

            ])

            ->authMiddleware([
                Authenticate::class,
            ])->plugins([
                    FilamentShieldPlugin::make(),
                ]);
    }
}
