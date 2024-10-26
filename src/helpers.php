<?php

use Igniter\Queues\Queue\ClosureJob;

if (!function_exists('toQueue'))
{
    function toQueue(Closure $callback, $data = [], $delay = 0, $delayType = 'minutes', $queue = 'default')
    {
        return ClosureJob::dispatch($callback, $data, $delay, $delayType, $queue);
    }
}
