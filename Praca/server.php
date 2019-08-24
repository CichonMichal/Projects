<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'id8497422_localhost', 'Asakura1', 'id8497422_rzutnasesje');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Nazwa użytkownika jest wymagana!"); }
  if (empty($email)) { array_push($errors, "Adres email jest wymagany!"); }
  if (empty($password_1)) { array_push($errors, "Hasło jest wymagane!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Hasła nie są jednakowe!");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // sprawdza czy dany użytkownik widnieje w bazie danych
    if ($user['username'] === $username) {
      array_push($errors, "Ta nazwa użytkownika już istnieje!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Ten adres email już istnieje!");
    }
  }

  // W końcu, użytkownik jest rejestrowany, jeżeli skrypt nie napotka żadnych błędów.
  if (count($errors) == 0) {
  	$password = md5($password_1);//szyfrowanie hasła

  	$query = "INSERT INTO users (username, email, password) 
  			      VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Jesteś zalogowany!";
  	header('location: welcome.php');
  }
}
// Logowanie
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Nazwa użytkownika jest wymagana!");
    }
    if (empty($password)) {
        array_push($errors, "Hasło jest wymagane!");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Jesteś zalogowany!";
          header('location: welcome.php');
        }else {
            array_push($errors, "Niepoprawne hasło lub nazwa użytkownika");
        }
    }
  }
  
// UZUPEŁNIANIE DANYCH
if (isset($_POST['user_info'])) {
  // Otrzymanie wartości z formularza
  $username = $_SESSION['username'];
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $info = mysqli_real_escape_string($db, $_POST['info']);

    $query = "UPDATE users SET 
                name='$name', 
                lastname='$lastname', 
                age='$age', 
                state='$state', 
                city='$city', 
                experience='$experience', 
                role='$role', 
                info='$info'
              WHERE username='$username'";
    mysqli_query($db, $query);
    header('location: welcome.php');
}
?>