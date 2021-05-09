<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
 crossorigin="anonymous">



<link rel="stylesheet" href="todo.css">
    
<title>Todo App</title>
</head>
<body>
   <div class="container mt-4">
       <div class="row">
          <div class="col-lg-1"></div>
           <div class="col-lg-10">
           
               <div class="shadow card">
                <a href="{{route('create')}}" class="btn btn-primary btn-block">Create New Event</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @foreach ($todo_arr as $td)
                            <td>{{$td->id}}</td>
                            <td>{{$td->title}}</td>
                            <td>{{$td->description}}</td>
                            <td>{{$td->location}}</td>
                            <td>{{$td->time}}</td>
                            <td>{{$td->start_time}}</td>
                            <td>{{$td->end_time}}</td>
                            <td><a href="delete/{{$td->id}}">X</a> | <a href="edit/{{$td->id}}">edit</a>
                                 </td>
                        </tr>
                        @endforeach
                        
                    
                </table>
            
               </div>
               
           </div>
       </div>
         </div>
</body>
   

    
   

 
    
</body>
</html>