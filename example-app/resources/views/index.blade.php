<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"

</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h2>Todo-App</h2></div>
        <div class="card-body">
            <div class="row">
                <form action={{route('storeTodo')}} method="POST">
                    @csrf
               <div class="input-group mt-3">
                <input type="text" name="todo" class="form-control" placeholder="add your task . . ." >
                <button class="input-group-text" type="submit">Add</button>
                   <h1> hello</h1>
            </div>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">{!! \Session::get('success') !!} </div>
                    @endif
                </form>
          </div>
                <div class="row mt-3">
                    <ul class="list-group">
                    @foreach($todolist as $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">{{$todo->todo}}</div>
                            <span class="badge  rounded-pill">
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </span>
                        </li>
                    @endforeach
                  </ul>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
