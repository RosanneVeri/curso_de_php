<p style="margin-top: 40px;">setDate => Recebe ano, mês e dia, alterando completamente a data</p>
<p>setTime => Recebe hora, minuto e segundo, alterando o tempo da data ()</p>

<?php

$data = new DateTime();

print_r($data);
echo "<Br>";

$data->setDate(1999, 12, 01);

print_r($data);
echo "<Br>";

$data->setTime(05, 12, 10);

print_r($data);
echo "<Br>";

echo $data->format('d/m/y') . "<br>";


?>