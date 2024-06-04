<?php

namespace App\Providers;

use App\Services\Telegram\Exceptions\TelegramException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Http::macro('telegram', function () {
            return Http::baseUrl('https://api.telegram.org/bot'.config('services.telegram.bot_token'))
                ->retry(2, 100)
                ->timeout(10)
                ->throw(function (Response $response) {
                    throw new TelegramException($response->json('description'));
                });
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
