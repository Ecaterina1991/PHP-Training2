 <?php
//includ fisierul de conectare la baza de date
require_once "login.php";

//folosesc require_once pentru a evita includerea repetata a unuia si aceluiasi fisier. contine informatii importante

//verific daca formularul de inregistrare a fost trimis
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  //se valideaza si se proceseaza datele introduse

  //verific daca exista deja un utilizator cu acelasi nume
  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($connection, $query);


  if(mysqli_num_rows($result) > 0) {
    echo "Numele de utilizator exista!";
  } else {
    //adaug utilizator in baza de date
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($connection, $query);
    echo "Inregistrare cu succes! Felicitari!";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Pagina de inregistrare</title>
</head>
<body>
  <h2>Formular de inregistrare</h2>
  <form method="POST" action="register.php">
    <input type="text" name="username" placeholder="Nume utilizator" required >
    <input type="password" name="password" placeholder="Parola" required>
    <input type="submit" name="register" value="Inregistrare">
  </form>
</body>
</html> 