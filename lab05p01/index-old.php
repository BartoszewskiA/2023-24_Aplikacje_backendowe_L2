<!doctype html>
<html>
<?php
//define("nazwa_pliku", "lista.txt");
$nazwa_pliku = "lista.txt";
?>

<?php
if (isset($_GET["nazwa"]) && isset($_GET["sztuk"])) {
  $linia = $_GET["nazwa"] . " : " . $_GET["sztuk"] . " sztuk\n";
  $plik = fopen($nazwa_pliku, "a");
  fwrite($plik, $linia);
  fclose($plik);
}
?>

<head>
  <meta charset="UTF-8" />
  <title></title>

</head>

<body>

  <h1>Lista zakupów:</h1>
  <?php


  if (!file_exists($nazwa_pliku)) {
    $plik = fopen($nazwa_pliku, "w");
    fclose($plik);
  }
  $plik = fopen($nazwa_pliku, "r");
  echo "<ol>";
  while (!feof($plik)) {
    echo "<li>", fgets($plik), "</li>";
  }
  echo "</ol>";
  fclose($plik);
  ?>

  <form action="form.html">

    <?php
    echo "<input type=\"hidden\" name=\"nazwa_pliku\"
          value=\"$nazwa_pliku\"/>"
    ?>
    </input>
    <input type="submit" value="Dodaj" />
  </form>

</body>

</html>