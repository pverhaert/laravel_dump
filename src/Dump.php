<?php

namespace Pverhaert;

class Dump
{
    /**
     * Dump data as json (add ?json to URL)
     * Dump the given variable and ends execution of the script (add ?dd to URL)
     *
     * @param mixed|null $data string, array, associative array object
     * @param bool $onlyInDebugMode runs only in debug mode: default = true
     * @return void
     * @version 1.0
     */
    public function var(mixed $data = null, bool $onlyInDebugMode = true): void
    {
        $show = !(($onlyInDebugMode === true && env('APP_DEBUG') === false));
        if (array_key_exists('json', app('request')->query()) && $show) {
            header('Content-Type: application/json');
            die(json_encode($data));
        } elseif (array_key_exists('dd', app('request')->query()) && $show) {
            dd($data);
        }
    }
}
