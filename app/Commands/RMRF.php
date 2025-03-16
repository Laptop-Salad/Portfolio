<?php

namespace App\Commands;

class RMRF extends Command {
    protected $signature = 'rm -rf /';

    public static function new() {
        return new self();
    }

    function component(): array
    {
        return [
            'component' => 'system-crash',
            'args' => []
        ];
    }
}
