<?php

namespace App\Livewire;

use App\Commands\About;
use App\Commands\CD;
use App\Commands\LS;
use App\Commands\NotFound;
use App\Commands\Research;
use App\Commands\RMRF;
use App\Commands\Skills;
use Livewire\Attributes\Url;
use Livewire\Component;

class Terminal extends Component
{
    public $input;

    public $components = [];

    #[Url]
    public $show_input = true;


    public function mount() {
//        session()->put('components', []);

        if (session()->get('components')) {
            $this->components = session()->get('components');
        }
    }

    public function handleInput() {
        $input = strtolower(trim($this->input));
        $inputs = explode(" ", $input);

        if ($input === 'rm -rf /') {
            $this->clear();
            $this->show_input = false;

            $command = RMRF::new();
            $this->handleCommand($command);
            return;
        }

        if ($inputs[0] === 'clear') {
            $this->clear();
            return;
        }

        $command = match ($inputs[0]) {
            'about' => About::new(),
            'skills' => Skills::new(),
            'research' => Research::new(),
            'ls' => LS::new(),
            default => NotFound::new()->setCommand($inputs[0]),
        };

        $this->handleCommand($command);
    }

    public function clear() {
        session()->put('components', []);
        $this->components = [];
        $this->input = null;
    }

    public function handleCommand($command) {
        $this->components[] = $command->component();

        session()->put('components', $this->components);

        $this->input = null;
    }

    public function fix() {
        $this->clear();
        $this->show_input = true;
    }

    public function render() {
        return view('livewire.terminal');
    }
}
