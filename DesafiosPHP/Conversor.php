<?php
    //Cotação Dólar
    $cotação =5.17;

    //Quantos Reais tenho
    $real=1000;

    //Conversão 
    $dólar = $real / $cotação;

    // Mostrando o Resultado
    echo "<p>A cotação do dólar hoje é $cotação ! </p>";
    echo "Caso você converta R$". number_format($real, 2)." reais, você terá $ " . number_format($dólar, 2). " dólares";
    #number_format formata os números com casas decimais.


?>