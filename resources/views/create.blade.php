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
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="m-5">
            @csrf
            <h1><i>Create Page!</i></h1>
            <div class="mb-2">
                <label for="name"></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control w-50 @error('name') is-invalid @enderror"  placeholder="Username">
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
            <div class="mb-4">
                <label for="email"></label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control w-50 @error('email') is-invalid @enderror" placeholder="email">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div> 
                <input type="file" name="image" class="form-control w-50 @error('image') is-invalid @enderror">
                <span class="text-danger">@error('image') {{ $message }} @enderror</span>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div> 
</body>
</html>