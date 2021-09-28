<html>
    <body>
        <a href="createnew"> Create New List </a>
        <table border="1">
            <tr>
                <td> ID </td>
                <td> Title </td>
                <td> Task </td>
                <td> Status </td>
                <td> Created At</td>
                <td> Updated At</td>
            </tr>
            @foreach($ToDoArray as $ToDo)
            <tr>
            <td> {{$ToDo -> id}} </td>
            <td> {{$ToDo -> title}} </td>
            <td> {{$ToDo -> task}} </td>
            <td> {{$ToDo -> iscompleted}} </td>
            <td> {{$ToDo -> created_at}} </td>
            <td> {{$ToDo -> updated_at}} </td>
            <td><a href="delete/{{$ToDo -> id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </body>