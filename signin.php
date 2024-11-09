<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <form method='post' action="">
    <div class="form-row">
      <div class="form-group col-md-6">
        <div class="form-group">
          <label for="firstname">first name</label>
          <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="lastname">last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
          </div>
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submitBTN">Sign in</button>
  </form>
  <?php


  if (isset($_POST["submitBTN"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["password"])) {
      echo "<h1>veuillez saisir tout les champs</h1>";
    } else {
      session_start();
      $_SESSION["emailS"] = $email;
      $_SESSION["passwordS"] = $password;
      header("location:login.php");
    }
  }


  ?>
</body>

</html>