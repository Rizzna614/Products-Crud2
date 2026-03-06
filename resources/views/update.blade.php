<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "{{ route('upgrade', $product->id, $product->name) }}" method = "post">
        @csrf
        @method("PUT")
        New name: <input type = "text" name = "newName" id = "newName" placeholder = "{{ $product->name }}">
        <input type = "submit" value="UPDATE">
    </form>
</body>
</html>