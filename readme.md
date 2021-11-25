# Thumper

RabbitMQ abstraction for queues and workers.

## Install

Via Composer

``` bash
$ composer require codin/thumper
```

## Examples

```php
$connection = new PhpAmqpLib\Connection\AMQPLazyConnection('localhost', '5672', 'username', 'password');
$exchange = new Codin\Thumper\Config\Exchange('my-exchange-name', PhpAmqpLib\Exchange\AMQPExchangeType::DIRECT);

$producer = new Codin\Thumper\Producer($connection, $exchange);
$producer->publish('some message');
```

```php
$connection = new PhpAmqpLib\Connection\AMQPLazyConnection('localhost', '5672', 'username', 'password');
$exchange = new Codin\Thumper\Config\Exchange('my-exchange-name', PhpAmqpLib\Exchange\AMQPExchangeType::DIRECT);

$queue = new Codin\Thumper\Config\Queue('my-queue-name');
$options = new Codin\Thumper\Config\Consumer($exchange, $queue);

$consumer = new Codin\Thumper\Consumer($connection, $options);

$callback = static function (PhpAmqpLib\Message\AMQPMessage $message): void {
    echo $message->getBody(); // some message
    $message->ack();
};
$consumer->consume($callback);
```

## Testing

``` bash
$ composer test
```
