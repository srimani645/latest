<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>read page</title>
</head>
<body>
    <table>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
        </tr>
        @foreach($data as $d)
        <tr>
          <td>{{$d->id}}</td>
          <td>{{$d->name}}</td>
          <td>{{$d->email}}</td>
          <td>{{$d->phone}}</td>
          <td><a href="update/{{$d->id}}">update</td>
            <td><a href="delete/{{$d->id}}">delete</td>
        </tr>
        @endforeach
        
      </table> 
    
</body>
</html>