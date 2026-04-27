<x-layout>
<h1>All Events</h1>

<ul>
@foreach ($events as $i)
<li>
<h2> Name: {{ $i->showTitle() }} </h2>
<p> Date: {{ $i->showDate() }} </p>
<p> Attendee Count: {{ $i->showAttendeeCount() }} </p>
</li>
@endforeach
</ul>

</x-layout>
