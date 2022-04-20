<?php

declare(strict_types=1);

namespace App\Controller;

use App\Messenger\Message\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function __construct(private readonly MessageBusInterface $bus)
    {
    }

    #[Route('/test', name: 'test', methods: ['GET'])]
    public function __invoke(): Response
    {
        $this->bus->dispatch(new Message('Message content!'));

        return $this->json(['status' => 'ok']);
    }
}