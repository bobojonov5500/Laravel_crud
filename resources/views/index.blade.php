<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div><a class="btn btn-success" href="{{route('posts.create')}}">qoshish</a></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id:</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Eamil</th>
            <th scope="col">Age</th>
            <th scope="col">Number</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td><a href="{{route('posts.show',$post->id)}}">
                {{$post->name}}
                </a>
            </td>
            <td>{{$post->surname}}</td>
            <td>{{$post->email}}</td>
            <td>{{$post->age}}</td>
            <td>{{$post->number}}</td>
                <td class="d-flex">
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        <a class="btn btn-outline-info" href="{{route('posts.edit',$post->id)}}">edit</a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">delete</button>
                    </form>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
