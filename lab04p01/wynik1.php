<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>

    <?php
    function generuj_tablice($zakres)
    {
        $tab = array();
        for ($i = 1; $i <= $zakres; $i++)
            $tab[] = $i;
        return $tab;
    }

    function losuj_zaklad($zakres, $ile_liczb)
    {
        $pula = generuj_tablice($zakres);
        $wyniki = array();
        // $indeksy = array_rand($pula, $ile_liczb);
        // foreach($indeksy as $liczba)
        //     $wyniki[] = $liczba;
        for ($i = 0; $i < $ile_liczb; $i++) {
            $indeks = array_rand($pula, 1);
            $wyniki[] = $pula[$indeks];
            unset($pula[$indeks]);
        }
        return $wyniki;
    }

    function losuj_zestaw($zakres, $ile_liczb, $ile_zakladow)
    {
        $zestaw = array();
        for ($i = 0; $i < $ile_zakladow; $i++)
            $zestaw[] = losuj_zaklad($zakres, $ile_liczb);
        return $zestaw;
    }
    ?>
</head>

<body>
<?php
print_r(losuj_zestaw(49,6,4));
?>

</body>

</html>