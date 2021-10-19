<?php

$time_start = microtime(true);
$customers = json_decode(file_get_contents('costumers.json'));
foreach ($customers as $customer){
    sleep(1);
    echo $customer->id .  ' - ' . $customer->name . PHP_EOL;
}

$time_end = microtime(true);
echo  $time_end - $time_start . PHP_EOL;

echo PHP_EOL;

/* Coroutine com Swoole */
$time_start = microtime(true);

$customers = json_decode(file_get_contents('costumers.json'));
Co\run(function () use ($customers){
    foreach ($customers as $customer){
        go(function () use ($customer){
            sleep(1);
            echo $customer->id .  ' - ' . $customer->name . PHP_EOL;
        });
    }
});

$time_end = microtime(true);
echo  $time_end - $time_start . PHP_EOL;