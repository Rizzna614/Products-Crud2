<x-layout>
    <h1>All product list: </h1>

    <?php
    /* foreach ($product as $i) {
        $realId = $i["id"] + 1;
        echo "<h2>". $realId. ". ". $i["name"]. "</h2>";

    } */
    ?>

    @foreach ($product as $i)
        <h2> {{ $i["id"] + 1 }}. {{ $i["name"] }} </h2>
        <p>Availabiliy: {{ $i["status"]  }}</p>
        <a href = "{{ route('productsUpdate', $i->id) }}">Update</a> <br>
        <form action = "{{ route('productsDelete', $i->id) }}" method = "post">
        @csrf
        @method("DELETE")
        <input type = "submit" value = "DELETE"> <br>
        </form>
    @endforeach

    <a href = "/">Home</a>
</x-layout>