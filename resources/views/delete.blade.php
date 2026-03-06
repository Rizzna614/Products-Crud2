<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete this product</title>
</head>
<body>
<form action = "/products" method = "post">
@csrf
@method("DELETE")
<input type = "submit" value = "DELETE"> <br>
</form>
</body>
</html>