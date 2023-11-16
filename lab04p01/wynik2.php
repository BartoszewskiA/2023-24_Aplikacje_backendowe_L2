<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        td {
            border: solid black 1px;
            padding: 1.2rem;
        }

        table {
            border-spacing: 0px;
        }
    </style>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zaklady = $_POST['zaklady'];
        $gra = $_POST['gra'];

        function losuj($liczba_losow, $max_los)
        {
            $obecna_liczba = 0;
            $tablica_losu = array();
            while ($obecna_liczba < $liczba_losow) {
                $los = rand(0, $max_los);
                if (in_array($los, $tablica_losu)) {
                    continue;
                }
                $obecna_liczba++;
                array_push($tablica_losu, $los);
            }
            return $tablica_losu;
        }

        function generujTablice($zaklady, $gra)
        {
            echo '<h1>' . $zaklady . ' : ' . $gra . '</h1>';
            echo '<br>';
            echo '<table>';
            for ($i = 1; $i <= $zaklady + 1; $i++) {
                echo '<tr>';
                echo '<td>Zakład: ' . $i . '</td>';
                if ($gra == "6z49") {
                    $temp = losuj(6, 49);
                    for ($ii = 0; $ii < 6; $ii++) {
                        echo '<td>' . $temp[$ii] . '</td>';
                    }
                } else if ($gra == "5z100") {
                    $temp = losuj(5, 100);
                    for ($ii = 0; $ii < 5; $ii++) {
                        echo '<td>' . $temp[$ii] . '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        }

        generujTablice($zaklady, $gra);
    }
    ?>
</body>

</html>