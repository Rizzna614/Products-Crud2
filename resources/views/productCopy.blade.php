<x-layout>
<h1>{{ $product["id"] + 1 }}. {{ $product["name"] }}</h1>
<p>Availabiliy: {{ $product["status"]  }}</p>
<a href = "{{ route('productsShow') }}">Back</a> <br>
<a href = "/">Home</a>
</x-layout>