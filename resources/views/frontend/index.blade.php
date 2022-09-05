@extends('frontend.layouts.app')
@section('content')
    {{--  Form For Task Submit  --}}
    <h3 class="text-end">MY Tasks: {{ $tasks->count() }}</h3>
    <form class="col" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="col-md-12">
            <label for="task" class="visually-hidden">TASK</label>
            <input type="text" class="form-control" name="task" id="task" placeholder="TASK">
        </div>
        <br>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">save task</button>
        </div>
    </form>
    {{--  Table For View Tasks  --}}
    <table class="table col">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->task }}</td>
                <td>
                    <form action="{{ url('/destroy',$task->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
