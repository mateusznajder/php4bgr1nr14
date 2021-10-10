<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imie"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="submit" value="zatwierdz"><br>

      <?php
        if (!empty($_POST["name"]) && !empty($_POST["surname"])){
          echo <<< L
          Imię: {$_POST['name']}<br>
          Nazwisko: $_POST[surname]<br>
          L;}
        else {
          echo "Wypełnij wszystkie dane ;)";
        }
       ?>
    </form>
  </body>
</html>
