<?php

namespace App\Commands;

class Research extends Command {
    protected $signature = 'research';

    public static function new() {
        return new self();
    }

    function component(): array
    {
        return [
            'component' => 'research',
            'args' => []
        ];
    }
}
