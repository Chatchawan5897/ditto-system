<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrap();

        // ป้อนเมนูทุกหน้า
        View::composer('*', function ($view) {
            $view->with('menus', Menu::where('is_active', 1)
                ->orderBy('order_index')->get());
        });

        // ======================================================
        // 1) REGISTER VIEW NAMESPACE ให้ทุก MODULE
        // ตัวอย่าง: Shared::table => app/Modules/Shared/Views/table.blade.php
        // ======================================================
        $modulesPath = app_path('Modules');

        foreach (glob($modulesPath . '/*', GLOB_ONLYDIR) as $moduleDir) {
            $module = basename($moduleDir);          // เช่น Asset, Shared
            $viewPath = $moduleDir . '/Views';       // path ไปที่ views (case-sensitive)

            if (is_dir($viewPath)) {
                View::addNamespace($module, $viewPath);
            }
        }

        // ======================================================
        // 2) REGISTER LIVEWIRE COMPONENT อัตโนมัติ
        // ชื่อ component จะเป็น module-class เช่น shared-table, asset-table
        // ======================================================
        foreach (glob($modulesPath . '/*/Livewire/*.php') as $livewireFile) {
            // แปลง path เป็น namespace class แบบถูกต้อง (ตัด Modules/ ซ้ำ)
            $filePath = Str::after($livewireFile, app_path() . '/'); // Modules/Asset/Livewire/AssetTable.php
            $filePath = Str::after($filePath, 'Modules/');           // Asset/Livewire/AssetTable.php

            $class = 'App\\Modules\\' . str_replace(
                ['/', '.php'],
                ['\\', ''],
                $filePath
            );

            // ตรวจสอบว่า class มีอยู่จริง
            if (!class_exists($class)) {
                continue; // ข้ามไฟล์ที่ไม่ใช่ class
            }

            // สร้างชื่อ component อัตโนมัติ
            $reflection = new \ReflectionClass($class);
            $shortName = $reflection->getShortName(); // เช่น Table
            $moduleName = basename(dirname(dirname($livewireFile))); // เช่น Shared

            // $componentName = Str::kebab($moduleName . '-' . $shortName); // shared-table
            $componentName = Str::kebab($shortName); // ใช้เฉพาะชื่อ class เช่น AssetTable -> asset-table

            Livewire::component($componentName, $class);
        }

        // ตอนนี้ทุก Livewire component ใน Modules/*/Livewire/*.php ถูก register อัตโนมัติ
    }
}
