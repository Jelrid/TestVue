<?php

declare(strict_types=1);

namespace App\Providers;
 
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
 
class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [
        ];
    }
 
    protected function menu(): array
    {
        return [
            MenuGroup::make('moonshine::ui.resource.system', [
               MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                   ->translatable(),
               MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                   ->translatable(),
            ])->translatable(),
 
            MenuItem::make('Documentation', 'https://laravel.com')
               ->badge(fn() => 'Check'),
        ];
    }
 
    protected function theme(): array
    {
        return [];
    }
}