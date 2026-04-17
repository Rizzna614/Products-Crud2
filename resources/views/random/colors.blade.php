<x-layout>
<h1>Colors</h1>

<p>Colors:
<?php
foreach ($colors as $i) {
    if ($i == $colors[count($colors) - 1]) {
        echo $i;
    } else {
        echo $i. ", ";
    }
}
?>
</p>
</x-layout>