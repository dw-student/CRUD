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
       <h1 class="text-center"><i>Single Record</i></h1>
       <table class="table table-bordered table-stripped">
           <thead>
              <th class="bg-light">Name</th>
              <th class="bg-light">Email</th>
              <th class="bg-light">Image</th>
              <th class="bg-light">Home</th>
              <th class="bg-light">Delete</th>
           </thead>
           <tbody>
               <tr>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td><img src="{{asset('storage/' . $user->file)}}" style="width:50px;border-radius:6px;"></td>
                   <td><a href="{{route('index')}}" class="btn btn-primary">Home</a></td>
                   <td><a href="{{route('destroy',$user->id)}}" class="btn btn-danger">Delete</a></td>
               </tr>
           </tbody>
       </table>
   </div>
</body>
</html>