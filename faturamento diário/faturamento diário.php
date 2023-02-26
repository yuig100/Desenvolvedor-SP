<?php

$data = json_decode(file_get_contents('dados.json'));

$menor_faturamento = $data[0]->valor;
$maior_faturamento = $data[0]->valor;

$soma_faturamento = 0;
foreach ($data as $item) {
    $soma_faturamento += $item->valor;

    if ($item->valor < $menor_faturamento) {
        $menor_faturamento = $item->valor;
    }

    if ($item->valor > $maior_faturamento) {
        $maior_faturamento = $item->valor;
    }
}

$media_faturamento = $soma_faturamento / count($data);

$dias_acima_media = 0;
foreach ($data as $item) {
    if ($item->valor > $media_faturamento) {
        $dias_acima_media++;
    }
}

echo "Menor faturamento do mês: " . $menor_faturamento . "\n";
echo "Maior faturamento do mês: " . $maior_faturamento . "\n";
echo "Número de dias com faturamento acima da média: " . $dias_acima_media . "\n";
