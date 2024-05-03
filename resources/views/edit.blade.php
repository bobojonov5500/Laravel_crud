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

<div class="container mt-3">
{{--    <a class="btn btn-info mb-2" href="{{route('posts.index')}}">data show</a>--}}
    <form action="{{route('posts.update',$post->id)}} " class="d-flex " method="POST">
        @csrf
        @method('put')
        <input class="form-control" value="{{$post->name}}" type="text" name="name" placeholder="name">
        <input class="form-control" value="{{$post->surname}}" type="text" name="surname" placeholder="surname">
        <input class="form-control" value="{{$post->email}}" type="email" name="email" placeholder="emil">
        <input class="form-control" value="{{$post->age}}" type="number" name="age" placeholder="age">
        <input class="form-control" value="{{$post->number}}" type="tel" name="number" placeholder="number">
        <button class="btn btn-success" type="submit">update</button>
    </form>
</div>

</body>
</html>
