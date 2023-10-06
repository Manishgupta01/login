<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    /* .main {
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
    }

    @media screen and (max-width: 720px) {
     .main {
      display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
} */
    .gradient-custom-2 {
      background: #fccb90;
      background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
      background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }
  </style>
</head>

<body>

  <!-- <div class="main">
    <div class="child_1">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
    </div>

    <div class="child_2">
      <form method="POST">
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
  </div> -->

  
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="/image/footer-logo.png" style="width: 185px;" alt="logo">
                    <!-- <h4 class="mt-1 mb-5 pb-1">We are The SanSoftware Team</h4> -->

                  </div>

                  <form method="POST">
                    <!-- <p>Please login to your account</p> -->

                    <div class="form-outline mb-1">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" id="email" class="form-control" name="email" placeholder="email address" required />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" class="form-control" name="password" placeholder="password" required />
                    </div>

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
                          echo "Worng Password";
                        }
                      }
                    }
                    ?>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login</button>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>