<?php

namespace App\Commands;

class About extends Command {
    protected $signature = 'about';

    public static function new() {
        return new self();
    }

    function component(): array
    {
        return [
            'component' => 'about',
            'args' => []
        ];
    }
}
