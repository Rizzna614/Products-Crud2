<x-layout>
<h1>New Product</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
@endif

    <form action = "{{ route('productsStore') }}" method = "post">
        @csrf
        Name: <input name = "name" id = "name" placeholder = "Enter product name">
        <input type = "submit" value="Create">

    </form>
</x-layout>