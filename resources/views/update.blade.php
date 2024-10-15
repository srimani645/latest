<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>

</head>
<body>
    <h1>update page</h1>
    
    <form method="POST" action="{{url('updatesave')}}">
        @csrf
        <input type="hidden"  value="{{$data->id}}">
        name<input type="text"  value="{{$data->name}}">
        email<input type="text" name="email" value="{{$data->email}}">
        city<input type="text" name="city" value="{{$data->city}}">
        ph<input type="text" name="phone" value="{{$data->phone}}">
        <input type="submit" value="submit" >
        
    </form>
    
</body>
</html>