<?php

declare(strict_types=1);

namespace App\Messenger\Handler;

use App\Messenger\Message\Message;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MessageHandler implements MessageHandlerInterface
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function __invoke(Message $message): void
    {
        $this->logger->info(\sprintf('[MESSAGE] - Message content: %s', $message->data));
    }
}