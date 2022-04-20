<?php

declare(strict_types=1);

namespace App\Messenger\Message;

class Message
{
    public function __construct(public readonly string $data)
    {
    }
}