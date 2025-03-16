<?php

namespace App\Commands;

abstract class Command {
    abstract static function new();
    abstract function component(): array;
}
