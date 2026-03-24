<x-layout>

<h1>Welcome!</h1>

<a href = "{{ route('about') }}">Ugly About</a> <br>
<a href = "{{ route('aboutNew') }}">About</a> <br>
<a href = "{{ route('info') }}">Info</a> <br>
<a href = "{{ route('productsShow') }}">All products</a> <br>
<a href = "{{ route('productsCreate') }}">Create new product</a> <br>
<a href = "{{ route('productsTest') }}">Test Products</a>

</x-layout>