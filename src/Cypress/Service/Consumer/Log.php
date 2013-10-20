<?php
/**
 * User: matteo
 * Date: 20/10/13
 * Time: 21.55
 * Just for fun...
 */


namespace Cypress\Service\Consumer;


use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class Log implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        var_dump($msg->body);
    }
}
