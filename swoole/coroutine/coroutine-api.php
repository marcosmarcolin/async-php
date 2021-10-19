<?php

$urlBase = 'https://jsonplaceholder.typicode.com/users';

$time_start = microtime(true);
$users = json_decode(file_get_contents($urlBase));

foreach ($users as $user) {
    $todos = json_decode(file_get_contents($urlBase . '/' . $user->id . '/todos'));
    $user->todos = $todos;
    echo $user->id . '(' . count($user->todos) . ')' . PHP_EOL;
}

$time_end = microtime(true);
echo  $time_end - $time_start . PHP_EOL;

/* Coroutine */
$users = null;
$time_start = microtime(true);
$users = json_decode(file_get_contents($urlBase));

Co\run(function () use ($users, $urlBase){
    foreach ($users as $user){
        go(function () use ($user, $urlBase){
            $todos = json_decode(file_get_contents($urlBase . '/' . $user->id . '/todos'));
            $user->todos = $todos;
            echo $user->id . '(' . count($user->todos) . ')' . PHP_EOL;
        });
    }
});

$time_end = microtime(true);
echo  $time_end - $time_start . PHP_EOL;