<html>
<body>
    <form action="{{ isset($task) ? route('update_task', $task->id) : route('create_task') }}" method="POST" >
        @csrf
        Title :<input type="text" name="title" value="{{ isset($task) ? $task->title : '' }}" > <br><br>
        Task :<input type="text" name="task" value="{{ isset($task) ? $task->task : '' }}" > <br><br>
        @if (isset($task))
            Status :<input type="text" name="status" value="{{ isset($task) ? $task->status : '' }}" > <br><br>
        @endif
        <input type="Submit" value="Save" > 
    </form>
</body>
</html>