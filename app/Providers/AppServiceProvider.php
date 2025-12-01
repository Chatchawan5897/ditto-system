<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use App\Models\Menu;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('menus', Menu::where('is_active', 1)
                ->orderBy('order_index')
                ->get());
        });

        // ======================================================
        // 1) Register View Namespace สำหรับทุก Module อัตโนมัติ
        // ======================================================
        $modulesPath = app_path('Modules');

        foreach (glob("{$modulesPath}/*", GLOB_ONLYDIR) as $moduleDir) {

            $module = basename($moduleDir);  // เช่น Asset

            $viewPath = "{$moduleDir}/views";

            if (is_dir($viewPath)) {
                // Asset::index → app/Modules/Asset/views/index.blade.php
                View::addNamespace($module, $viewPath);
            }
        }

        // ======================================================
        // 2) Auto-register Livewire จากทุก Module
        // ======================================================
        foreach (glob("{$modulesPath}/*/Livewire/*.php") as $file) {

            $module     = basename(dirname(dirname($file))); // Asset
            $className  = basename($file, '.php');           // AssetTable
            $class      = "App\\Modules\\{$module}\\Livewire\\{$className}";

            // แปลง AssetTable → asset-table
            $alias = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $className));

            if (class_exists($class)) {
                Livewire::component($alias, $class);
            }
        }
    }
}
