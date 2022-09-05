<div>
    <h3 class="text-center">Add New Task</h3>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form class="col" method="POST" action="{{ route('store') }}">
        @csrf
        @error('task')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col-md-12">
            <label for="task" class="visually-hidden">TASK</label>
            <input type="text" class="form-control" name="task" id="task" wire:model="task">
        </div>
        <br>
        <div class="col-md-12">
            <button wire:click.prevent="addTask" class="btn btn-primary">save task</button>
        </div>
    </form>
</div>
