<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Blade::directive('obfuscatePhone', function ($phone) {
            return "<?php echo e(preg_replace('/(\d{2})\d{6}(\d{2})/', '$1******$2', $phone)); ?>";
        });

        Blade::directive('obfuscateEmail', function ($email) {
            return "<?php echo e(preg_replace('/(.{1}).+(.{1}@.+)/', '$1****$2', $email)); ?>";
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
