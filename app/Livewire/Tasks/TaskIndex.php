<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Task... - Livewire')]

class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required|max:12|string')]
    public $name;

    public function mount(){
        $this->tasks = Task::with('user')->get();
    }

    public function save(){

        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        return $this->redirect(route('tasks'));
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
