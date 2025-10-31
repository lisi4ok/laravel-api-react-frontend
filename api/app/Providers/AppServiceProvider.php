<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\ContactService;
use App\Services\InteractionService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ContactService::class);
        $this->app->bind(InteractionService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();
    }
}
