<?php

namespace App\Services\Telegram;

use Illuminate\Support\Facades\Http;

class TelegramApi
{
    public static function sendMessage(
        ?int $chatId,
        string $text,
        ?int $messageThreadId = null,
        bool $linkPreview = true,
    ): void {
        Http::telegram()
            ->post('/sendMessage', [
                'chat_id' => $chatId,
                'text' => $text,
                'message_thread_id' => $messageThreadId,
                'link_preview_options' => [
                    'is_disabled' => $linkPreview,
                ],
            ]);
    }
}
