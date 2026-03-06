<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All product list: </h1>

    <?php
    /* foreach ($product as $i) {
        $realId = $i["id"] + 1;
        echo "<h2>". $realId. ". ". $i["name"]. "</h2>";

    } */
    ?>

    @foreach ($product as $i)
        <h2> {{ $i["id"] + 1 }}. {{ $i["name"] }} </h2>
        <a href = "{{ route('update', $i->id) }}">Update</a> <br>
        <form action = "{{ route('delete', $i->id) }}" method = "post">
        @csrf
        @method("DELETE")
        <input type = "submit" value = "DELETE"> <br>
        </form>
    @endforeach

    <a href = "/">Home</a>
</body>
</html>