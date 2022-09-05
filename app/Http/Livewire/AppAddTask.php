<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AppAddTask extends Component
{
    public $task;
    protected $rules = [
        'task' => 'required|min:5|max:256',
    ];

    public function render()
    {
        return view('livewire.app-add-task');
    }

    public function updated($task)
    {
        $this->validateOnly($task);
    }

    public function addTask()
    {
        $this->validate();

        Task::create([
            'task' => $this->task,
        ]);
        $this->task = "";

        $this->emit('taskAdded');
        session()->flash('message', 'Task Was Added Successfully!');
    }
}
