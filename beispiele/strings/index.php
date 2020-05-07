<?php
$vorname = 'Moritz';
$nachname = 'Müller';
$nachricht = <<<ENDE
<p>
$nachname
</p>
ENDE;
echo "$vorname $nachname";
echo $nachricht;
?>