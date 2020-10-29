<?php Error_reporting (0); ?>

<h1>Map & Filter</h1>

<?php

/* Exemplo para arredondar notas */
/* método tradicional usando laço for */
$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br>';

/* método usando a função map */

$notasFinais2 = array_map(round, $notas);

print_r($notasFinais2);

/* outro exemplo */

$apenasAprovados1 = [];

foreach($notas as $nota) {
    if ($nota >= 7) {
        $apenasAprovados1[] = $nota;
    }
}

echo '<h1>Apenas os aprovados</h1>';

print_r($apenasAprovados1);

/* usando a função Filter() */

echo '<h1>Apenas os aprovados usando Filter()</h1>';

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasAprovados2 = array_filter($notas, aprovados);

print_r($apenasAprovados2);

