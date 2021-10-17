<?php

/* Coroutine com Swoole */
$customers = json_decode(file_get_contents('costumers.json'));
Co\run(function () use ($customers){
    foreach ($customers as $customer){
        go(function () use ($customer){
            sleep(1);
            echo $customer->id .  ' - ' . $customer->name . PHP_EOL;
        });
    }
});