<x-layout>
    <h1>All product list: </h1>

    <?php
/* foreach ($product as $i) {
    $realId = $i["id"] + 1;
    echo "<h2>". $realId. ". ". $i["name"]. "</h2>";

} */
    ?>

    @foreach ($product as $i)
    @if ($i["deleted_at"] == null)
        <h2> {{ $i["id"] + 1 }}. {{ $i["name"] }} </h2>
        <p>Availabiliy: {{ $i["status"]  }}</p>
        <a href="{{ route('productsUpdate', $i->id) }}">Update</a> <br>
        <a href="{{ route('copyProduct', $i->id) }}">Copy</a> <br>
        <form action="{{ route('productsDelete', $i->id) }}" method="post">
            @csrf
            @method("DELETE")
            <input type="submit" value="DELETE"> <br>
        </form>
    @endif
    @endforeach

    <a href="/">Home</a> <br>
    <a href="{{ route('productsDeletedShow') }}">Deleted products</a> <br>
</x-layout>