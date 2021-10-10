<?php

use Workerman\Worker;
use Workerman\Timer;

require_once __DIR__ . '/vendor/autoload.php';

$task = new Worker();
$task->onWorkerStart = function ($task) {
    Timer::add(3, function () {
        echo "Timer run\n";
    });
};

Worker::runAll();