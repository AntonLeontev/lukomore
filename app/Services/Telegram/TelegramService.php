<?php

namespace App\Services\Telegram;

use Illuminate\Http\Request;

class TelegramService
{
    public function __construct(public TelegramApi $api)
    {
    }

    public function sendRequest(Request $request)
    {
        if (str_starts_with($request->phone, '8')) {
            $phone = '+7'.substr($request->phone, 1);
        } else {
            $phone = $request->phone;
        }

        $message = sprintf("Новая заявка:\n\nИмя: %s\nТелефон: %s", $request->name, $phone);

        $this->api->sendMessage(config('services.telegram.chat_id'), $message);
    }
}
