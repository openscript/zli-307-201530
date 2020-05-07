<?php
$array = ['erster' => 'Wert1', 'zweiter' => 'Wert2'];
$array['dritter'] = 'Wert3';
$array['vierter'][200] = 'gugus';
$array['vierter'][300] = 'gugus';
var_dump($array);
?>