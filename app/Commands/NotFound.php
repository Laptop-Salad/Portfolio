<?php

namespace App\Commands;

class NotFound extends Command {
    public $command;

    public static function new() {
        return new self();
    }

    public function component(): array {
        return [
            'component' => 'notfound',
            'args' => [
                'command' => $this->command,
            ]
        ];
    }

    public function setCommand($command): self {
        $this->command = $command;

        return $this;
    }
}
