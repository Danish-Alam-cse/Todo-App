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
   <div class="container">
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-5">
               <div class="card">
            <a href="/" class="mb-2 btn btn-success btn-sm">back</a>
       
            <form action="/update/{{$todo_arr->id}}" method="post">
                @csrf
                <div class="mb-2">
                    <input type="text" name="title" value="{{$todo_arr->title}}" class="form-control" placeholder="Enter Title">

                </div>
                
                <div class="mb-2">
                    <textarea name="description" class="form-control" placeholder="Enter desvcription">{{$todo_arr->description}}</textarea>

                </div>
                
                <div class="mb-2">
                    <input type="text" name="location" class="form-control" value="{{$todo_arr->location}}" placeholder="Enter Location">

                </div>

                <div class="mb-2">
                    <input type="text" name="time" class="form-control" value="{{$todo_arr->time}}" placeholder="Enter Time">

                </div>

                <div class="mb-2">
                    <input type="text" name="start_time" class="form-control" value="{{$todo_arr->start_time}}" placeholder="Enter Start Time">

                </div>

                <div class="mb-2">
                    <input type="text" name="end_time" class="form-control" value="{{$todo_arr->end_time}}" placeholder="Enter End Time">

                </div>

                <div class="mb-2">
                    <input type="submit" value="save" class="float-right btn btn-success btn-lg">

                </div>
                
                
            </form>
         
           </div>
           </div>
       </div>
       
   </div>
   

   

 
    
</body>
</html>