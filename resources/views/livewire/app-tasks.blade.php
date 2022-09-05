<div>
    <h3 class="text-center">MY Tasks: {{ $totalTasks }}</h3>

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
                    <a href="{{ url('/destroy',$task->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
</div>
