<html>
    <body>
        <a href="createnew"> Create New List </a>
        <table border="1">
            <tr>
                <td> ID </td>
                <td> Title </td>
                <td> Task </td>
                <td> Status </td>
                <td> Actions </td>
            </tr>
            @foreach($tasks as $task)
            <tr>
            <td> {{$task->id}} </td>
            <td> {{$task->title}} </td>
            <td> {{$task->task}} </td>
            <td> {{$task->status ? 'Completed' : 'Pending'}} </td>
            <td>
                <a href="{{ route('edit_task', $task->id) }}">Edit</a>
                <a href="{{ route('delete_task', $task->id) }}">Delete</a>
            </td>
            </tr>
            @endforeach
        </table>
    </body>