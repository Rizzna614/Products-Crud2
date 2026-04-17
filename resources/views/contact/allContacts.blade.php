<x-layout>
<h1>All Contacts: </h1>

<?php
echo "<ul>";
foreach ($contacts as $i) {
    echo "<li> <h2>ID - ". $i["id"]. "</h2>";
    echo "<p> Name: ". $i["name"]. "<p>";
    echo "<p> Email: ". $i["email"]. "<p>";
    echo "<p> Question: ". $i["question"]. "<p></li>";
}
echo "</ul>";
?>
</x-layoutx>