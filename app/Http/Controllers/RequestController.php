<?php

namespace App\Http\Controllers;

use App\Services\Telegram\TelegramService;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function send(Request $request, TelegramService $telegramService)
    {
        $telegramService->sendRequest($request);
    }
}
