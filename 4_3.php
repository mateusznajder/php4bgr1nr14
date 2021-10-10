<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (empty($_POST['person'])) {
      echo <<< FORMCOUNTPERSON
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób">
        <input type="submit" name="Zatwierdź" value="Zatwierdź">
      </form>
    FORMCOUNTPERSON;
    }
    if (!empty($_POST['person'])) {
      echo "Ilość osób w rodzinie: $_POST[person] <br><br>";

    echo <<< FORMCOUNTPERSON
    <form method="post">
    FORMCOUNTPERSON;
    for ($i = 1; $i <= $_POST['person']; $i++) {
      echo "<input type='number' name='person$i' placeholder='Wiek osoby $i'><br><br>";
    }

    echo <<< FORMCOUNTPERSON
      <input type="submit" name="Zatwierdź" value="Zatwierdź">
    </form>
    FORMCOUNTPERSON;
    }
    ?>
  </body>
</html>
