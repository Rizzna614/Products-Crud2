<x-layout>
    <form action = "{{ route('productsUpgrade', $product->id, $product->name) }}" method = "post">
        @csrf
        @method("PUT")
        New name: <input type = "text" name = "newName" id = "newName" placeholder = "{{ $product->name }}">
        <input type = "submit" value="UPDATE">
    </form>
</x-layout>
