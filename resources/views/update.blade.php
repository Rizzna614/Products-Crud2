<x-layout>
    <?php $options = ['available' => 'Available', 'notAvailable' => 'Not Available',]; ?>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
    @endif

    <form action = "{{ route('productsUpgrade', $product->id, $product->name) }}" method = "post">
        @csrf
        @method("PUT")
        New name: <input type = "text" name = "newName" id = "newName" placeholder = "{{ $product->name }}"> <br>
        <!-- Availability: <input type = "text" name = "newStatus" id = "newStatus" placeholder= "{{ $product->status }}"> <br> -->
        Availability:
        <select id = "select" name = "select">
            @foreach ($options as $value => $label)
                <option value="{{ $value }}"
                    {{ old('status', $product->status) === $value ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
        <input type = "submit" value="UPDATE">
    </form>

    <!-- <a href = "{{ route('productsShow') }}">Back</a> -->
</x-layout>
