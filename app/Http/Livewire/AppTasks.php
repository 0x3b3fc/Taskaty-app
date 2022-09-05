<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class AppTasks extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['taskAdded'=>'$refresh'];
    public function render()
    {
        $totalTasks = Task::all()->count();
        $tasks = Task::paginate(10);
        return view('livewire.app-tasks',compact('totalTasks','tasks'));
    }

}
