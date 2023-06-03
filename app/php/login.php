<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Area Riservata | Fantasy Day</title>
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
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" name="submit" id="submit" value="Login">
  </form>
</body>
</html>

<?php
if(isset($_SESSION['admin'])) {
  header("Location: /");
}
if(isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $new_pass = md5($password);
  $sql = $conn->query("select * from users where email = '$email' and password = '$new_pass';");
  if($row = $sql->fetch_assoc()) {
    $_SESSION['admin'] = $row['id'];
    echo $row['username'];
    header("Location: /");
  } else {
    echo "errore";
  }
}
?>