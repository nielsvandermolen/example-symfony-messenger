<?php

# project/src/Controller/SleepController.php

namespace App\Controller;

use App\Message\SleepMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class SleepController extends AbstractController
{
    /**
     * @Route(name="sleep", path="sleep")
     */
    public function processVideo(MessageBusInterface $bus) {
        $bus->dispatch(new SleepMessage(10, 'Hello World'));
        return new Response('<html><body>OK.</body></html>');
    }
}
