<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product form</title>
</head>
<body>
    <form action = "/products" method = "post">
        @csrf
        Name: <input name = "name" id = "name" placeholder = "Enter product name">
        <input type = "submit" value="Create">

    </form>
</body>
</html>