<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aggiungi Articolo | Fantasy Day</title>
  <link rel="stylesheet" href="../../dist/styles.css" />
    <link
      rel="shortcut icon"
      href="../img/logo_resized.png"
      type="image/png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
    />
</head>
<body>
  <form method="POST">
    <input type="text" name="titolo" id="titolo" placeholder="Titolo">
    <input type="text" name="testata" id="testata" placeholder="Testata">
    <input type="text" name="descrizione" id="descrizione" placeholder="Descrizione">
    <input type="text" name="link" id="link" placeholder="Link">
    <input type="submit" name="submit" id="submit" value="Login">
  </form>
</body>
</html>

<?php
if(!isset($_SESSION['admin'])) {
  header("Location: /");
}
if(isset($_POST['submit'])) {
  $titolo = mysqli_real_escape_string($conn, $_POST['titolo']);
  $testata = mysqli_real_escape_string($conn, $_POST['testata']);
  $descrizione = mysqli_real_escape_string($conn, $_POST['descrizione']);
  $link = mysqli_real_escape_string($conn, $_POST['link']);

  $sql = $conn->query("insert into diconodinoi (titolo, testata, descrizione, link) values ('$titolo', '$testata', '$descrizione', '$link');");
  header( "refresh:1;url=/" );
}
?>