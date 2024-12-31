 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
 </head>
 <body>
    <div class="conatiner m-5">
        <h1 class="text-center"><i>Images in CRUD</i></h1>
        <a href="{{route('create')}}" class="btn btn-primary m-3">Create</a>
        <table class="table table-bordered table-stripped">
            <thead>
               <th class="bg-light">Name</th>
               <th class="bg-light">Email</th>
               <th class="bg-light">Image</th>
               <th class="bg-light">View</th>
               <th class="bg-light">Edit</th>
               <th class="bg-light">Delete</th>
            </thead>
            <tbody>
               @forelse ($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="{{asset('storage/' . $user->file)}}" style="width:50px;border-radius:6px;"></td>
                    <td><a href="{{route('show',$user->id)}}" class="btn btn-success">Read</a></td>
                    <td><a href="{{route('edit',$user->id)}}" class="btn btn-dark">Update</a></td>
                    <td><a href="{{route('destroy',$user->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                    
                @empty
                <tr>
                    <td colspan="6" class="text-center">No Record Found</td>
                </tr>
                    
                @endforelse
            </tbody>
        </table>
        <div class="mt-2">
            {{ $data->links() }}
        </div>
    </div>
 </body>
 </html>