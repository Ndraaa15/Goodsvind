<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <form action="{{ url('/auth/signout') }}" method="GET">
        @csrf
        @method('GET')
        <input type="submit" value="Logout">
    </form>
</body>

</html>
