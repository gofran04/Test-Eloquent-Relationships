<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user->name }})</li>
        <!-- <li>{{ $task->name }} ({{ $task->user->name ?? 'none' }})</li> -->
    @endforeach
</ul>
