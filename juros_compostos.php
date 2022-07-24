<?php
$investimento_inicial = floatval($_POST['investimento_inicial']);
$anual = 0;
$anos = ($_POST['anos']);
$taxa_de_juros = floatval($_POST['taxa_de_juros']);

$investimento_acumulado = $investimento_inicial ;

$investimento_acumulado2 = $investimento_inicial + $anual * $anos;

$juros_compostos_total = 0;

for ($i = 0; $i < $anos; $i++) {
    $juros_compostos = $investimento_acumulado * $taxa_de_juros / 100;
    $juros_compostos_total += $juros_compostos;
    $investimento_acumulado += $juros_compostos;
}

$valor_a_receber = $investimento_acumulado2 + $juros_compostos_total;

echo "Valor Investido: " . number_format($investimento_acumulado2, 2, ",", ".") . "<br>" . "<br>";

echo "Total dos juros é: " . number_format($juros_compostos_total, 2, ",", ".") . "<br>" . "<br>";

echo "Total do valor a receber é: " . number_format($valor_a_receber, 2, ",", ".") . "<br>" . "<br>";
?>
