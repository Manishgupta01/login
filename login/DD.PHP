<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .main {
      display: flex;
      justify-content: center;
      align-items:center;

    }

    .child_1, .child_2{
      width: 50%;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .child_2{
      justify-content: space-between;
      height: 100%;
    }
    .f1{
    height:300px;
    width: 75%;
  
    
    }

    @media screen and (max-width: 720px) {
     .main {
      display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;}
    .child_1, .child_2{
      width: 90%;
      display: flex;
      align-items: center;
      flex-direction: column;
  }
}
  </style>
</head>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $Upassword = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "new";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
      die("Sorry we failed to connect :"  . mysqli_connect_error());
    } else {

      $sql = "SELECT * FROM usermaster WHERE email = '$email' AND password = '$Upassword' ";


      $result = mysqli_query($conn, $sql);

      $check = mysqli_fetch_assoc($result);

      if (isset($check)) {
        header("Location: welcome.php");
      } else {
        echo "failure";
      }
    }
  }
  ?>
  <div class="main">
    <div class="child_1">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
    </div>

    <div class="child_2">
      <form method="POST" class="f1">
        <div class="mb-3 my-4">
          <h3>LOGIN FORM </h3>
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
          <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" onclick="sub()">Submit</button>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>