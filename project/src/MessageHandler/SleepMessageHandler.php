<?php

# project/src/MessageHandler/SleepMessageHandler.php

namespace App\MessageHandler;

use App\Message\SleepMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SleepMessageHandler implements MessageHandlerInterface
{
    public function __invoke(SleepMessage $sleepMessage)
    {
        $seconds = $sleepMessage->getSeconds();
        $output = $sleepMessage->getOutput();

        # Simulate a long running process.
        sleep($seconds);
        echo $output . PHP_EOL;
    }
}
