<?php

namespace App\Commands;

class LS extends Command {
    protected $signature = 'ls';

    public static function new() {
        return new self();
    }

    function component(): array {
        return [
            'component' => 'ls',
            'args' => [],
        ];
    }
}
