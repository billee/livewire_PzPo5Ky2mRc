<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Task... - Livewire')]

class TaskIndex extends Component
{
    public $tasks;
    public $name;

    public function mount(){
        $this->tasks = Task::with('user')->get();
    }

    public function add(){
        dd($this->name);
    }

    // #[Layout('layouts.app')]
    public function render()
    {
        $title = 'Index';
        return view('livewire.tasks.task-index')
            ->with([
                'button' => 'New Task'
            ]);
    }
}
