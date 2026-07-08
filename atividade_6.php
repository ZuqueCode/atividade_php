function converterTemperatura($valor, $origem, $destino)
{
    if ($origem == $destino) {
        return $valor;
    }

    if ($origem == "C" && $destino == "F") {
        return ($valor * 9/5) + 32;
    }

    if ($origem == "C" && $destino == "K") {
        return $valor + 273.15;
    }

    if ($origem == "F" && $destino == "C") {
        return ($valor - 32) * 5/9;
    }

    if ($origem == "F" && $destino == "K") {
        return (($valor - 32) * 5/9) + 273.15;
    }

    if ($origem == "K" && $destino == "C") {
        return $valor - 273.15;
    }

    if ($origem == "K" && $destino == "F") {
        return (($valor - 273.15) * 9/5) + 32;
    }

    return "Conversão inválida.";
}

echo "<h3>Exercício 06</h3>";
echo "25°C para Fahrenheit: " . converterTemperatura(25, "C", "F") . " °F";

echo "<hr>";

?>