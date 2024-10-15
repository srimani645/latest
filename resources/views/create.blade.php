<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>

</head>
<body>
    <h1>create page</h1>
    <form method="POST"action="">
        @csrf
        name<input type="text" name="name">
        email<input type="text" name="email">
        city<input type="text" name="city">
        ph<input type="text" name="phone">
        <input type="submit" value="submit">
    </form>
</body>
</html>