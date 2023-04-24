<?php
include "config.php";

// Encrypt cookie
function encryptCookie($userid)
{

  $key = hex2bin(openssl_random_pseudo_bytes(4));

  $cipher = "aes-256-cbc";
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);

  $ciphertext = openssl_encrypt($userid, $cipher, $key, 0, $iv);


  return (base64_encode($ciphertext . '::' . $iv . '::' . $key));
}

// Decrypt cookie
function decryptCookie($ciphertext)
{

  $cipher = "aes-256-cbc";

  list($encrypted_data, $iv, $key) = explode('::', base64_decode($ciphertext));
  return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);
}


// Check if $_SESSION or $_COOKIE already set
if (isset($_SESSION['userid'])) {
  header('Location: home.php');
  exit;
} else if (isset($_COOKIE['rememberme'])) {

  // Decrypt cookie variable value
  $userid = decryptCookie($_COOKIE['rememberme']);

  // Fetch records
  $stmt = $conn->prepare("SELECT count(*) as cntUser FROM ciudadanos WHERE id_usuario=:id_usuario");
  $stmt->bindValue(':id_usuario', (int)$userid, PDO::PARAM_INT);
  $stmt->execute();
  $count = $stmt->fetchColumn();

  if ($count > 0) {
    $_SESSION['userid'] = $userid;
    header('Location: maind.php');
    exit;
  }
}

// On submit
if (isset($_POST['but_submit'])) {

  $telefono = $_POST['txt_uname'];
  $contrasena = $_POST['txt_pwd'];

  if ($telefono != "" && $contrasena != "") {


    // Fetch records
    $stmt = $conn->prepare("SELECT count(*) as cntUser,id_usuario FROM ciudadanos WHERE telefono=:telefono and contrasena=:contrasena");
    $stmt->bindValue(':telefono', $telefono, PDO::PARAM_STR);
    $stmt->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);
    $stmt->execute();
    $record = $stmt->fetch();

    $count = $record['cntUser'];

    if ($count > 0) {
      $userid = $record['id'];

      if (isset($_POST['rememberme'])) {

        // Set cookie variables
        $days = 30;
        $value = encryptCookie($userid);

        setcookie("rememberme", $value, time() + ($days *  24 * 60 * 60 * 1000));
      }

      $_SESSION['userid'] = $userid;
      header('Location: maind.php');
      exit;
    } else {
      echo "Invalid username and password";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Login PDO y PHP</title>

</head>

<body class="d-flex flex-column h-100">

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">PROGWEB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Portada <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <hr>
  <br>
  <main>
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h3>Login PDO y PHP</h3>
          <hr>
        </div>
        <div class="col-md-6">
          <div id="div_login">
            <div>
              <form method="post" action="">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                  <input type="text" class="form-control" name="txt_uname" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Usuario registrado en la BD.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="txt_pwd">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="rememberme" value="1">
                  <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>
                <button type="submit" class="btn btn-primary" name="but_submit">Iniciar sesión</button>
              </form>


            </div>
          </div>


        </div>
      </div>
      <footer>
        <hr>
        <div class="copyright"> &copy; 2007 - <?= date("Y") ?> <a href="https://localhost" target="_blank">Iscadrigs</a>. All rights reserved </div>
        <div class="footerlogo"><a href="https://localhost" target="_blank"></a> </div>
      </footer>
    </div>

  </main>
</body>

</html>