<?php

namespace App\Commands;

class Skills extends Command {
    protected $signature = 'skills';

    public static function new() {
        return new self();
    }

    function component(): array
    {
        return [
            'component' => 'skills',
            'args' => []
        ];
    }
}
