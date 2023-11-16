<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <h2>Podsumowanie:</h2>
  <?php

  if (!isset($_GET["imie"]) || !isset($_GET["nazwisko"]) || !isset($_GET["semestr"])) {
    echo "Brakuje niezbędnych danych <br>";
    echo "<a href='index.html'>Powrot do formularza</a>";
    return;
  }

  if (empty($_GET["imie"]) || empty($_GET["nazwisko"]) || empty($_GET["semestr"])) {
    echo "Dane nie mogą być puste <br>";
    echo "<a href='#' onclick='window.history.go(-1);'>Powrot do formularza</a>";
    return;
  }

  if (!is_numeric($_GET["semestr"]) || $_GET["semestr"] > 7 || $_GET["semestr"] < 1) {
    echo "Nieprawidłowy numer semestru, musi być liczbą z przedziału od 1 do 7. <br>";
    echo "<a href='index.html'>Powrot do formularza</a>";
    return;
  }

  $imie = $_GET["imie"];
  $nazwisko = $_GET["nazwisko"];
  $semestr = $_GET["semestr"];
  $stan_zaliczenia_jako_string = "";



  if (isset($_GET["zaliczone"])) {
    $stan_zaliczenia_jako_string = "Zaliczony";
  } else {
    $stan_zaliczenia_jako_string = "Niezaliczony";
  }


  echo "Student semestru $semestr <br>";
  echo "Imię: $imie <br>";
  echo "Nazwisko: $nazwisko <br>";
  echo "Semestr $semestr $stan_zaliczenia_jako_string <br>";

  ?>
</body>

</html>