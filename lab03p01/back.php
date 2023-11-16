<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["liczba_pol"]) || $_POST["liczba_pol"] < 1 || $_POST["liczba_pol"] > 10) {
      echo "Niewlaściwe dane";
    } else {
      $ile = $_POST["liczba_pol"];
      echo "<form action=\"wynik.php\" method=\"post\">";
      for ($i = 0; $i < $ile; $i++) {
        echo '<label for="tab[]">Dana ' . ($i + 1) . ': </label>';
        echo '<input type="tekst" name="tab[]"><br><br>';
      }
      echo '<input type="submit" value="Wyślij dane">';
      echo '</form>';
    }
  } else {
    echo "<form action=\"index.php\" method=\"post\">";
    echo '<label for="liczba_pol">Liczba pól tabeli: </label>';
    echo '<input type="number" name="liczba_pol" max="7" min = "1">';
    echo '<input type="submit" value="Wprowadź dane">';
    echo '</form>';
  }
  ?>


</body>

</html>