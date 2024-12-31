<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-50">
        <form action="{{route('update',$user->id)}}" method="POST" enctype="multipart/form-data" class="m-5">
            @csrf
            <h1><i>Edit Page!</i></h1>
            <div class="mb-2">
                <label for="name"></label>
                <input type="text" name="name" id="name" class="form-control w-50" value="{{$user->name}}" placeholder="Username">
            </div>
            <div class="mb-2">
                <label for="email"></label>
                <input type="text" name="email" id="email" class="form-control w-50" value="{{$user->email}}" placeholder="email">
            </div>
            <div>
                <img src="{{asset('storage/'. $user->file)}}" style="width: 100px;border-radius:6px;">
                <input type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>       
    </div>
</body>
</html>