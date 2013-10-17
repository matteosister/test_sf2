<?php
/**
 * User: matteo
 * Date: 17/10/13
 * Time: 16.04
 * Just for fun...
 */


namespace Cypress\Service;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class Consumer implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        var_dump('ricevuto: '.$msg);
    }
}