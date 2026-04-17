<x-layout>
<h1>Create</h1>

<form action = "{{ route('contactsStore') }}" method = "post">
    @csrf 
    Name: <input type = "text" name = "name" id = "name"> <br>
    Email: <input type = "email" name = "email" id = "email"> <br>
    Question: <input type = "textarea" name = "question" id = "question"> <br>
    <input type = "submit" value = "SUBMIT">
</form>
</x-layout>