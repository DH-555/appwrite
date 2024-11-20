<?php

namespace Appwrite\Event;

use Utopia\Queue\Connection;

class Webhook extends Event
{
    public function __construct(protected Connection $connection)
    {
        parent::__construct($connection);

        $this
            ->setQueue(Event::WEBHOOK_QUEUE_NAME)
            ->setClass(Event::WEBHOOK_CLASS_NAME);
    }
}
