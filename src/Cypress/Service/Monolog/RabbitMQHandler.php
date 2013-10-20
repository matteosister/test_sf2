<?php
/**
 * User: matteo
 * Date: 20/10/13
 * Time: 21.47
 * Just for fun...
 */


namespace Cypress\Service\Monolog;


use Monolog\Handler\AbstractProcessingHandler;
use OldSound\RabbitMqBundle\RabbitMq\Producer;

class RabbitMQHandler extends AbstractProcessingHandler
{
    /**
     * @var \OldSound\RabbitMqBundle\RabbitMq\Producer
     */
    private $producer;

    public function __construct(Producer $producer)
    {
        $this->producer = $producer;
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array $record
     *
     * @return void
     */
    protected function write(array $record)
    {
        $this->producer->publish($record['formatted']);
    }
}
