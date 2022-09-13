<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
  </head>
  <body>
    <div class="container intro-section">
      <div class="row">
        <div class="col-12 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="img/logo1.png" alt="background" class="gambar">
              <img src="img/img3.jpg" alt="background" class="float-left">
            </div>
            <div class="col-lg">
              <h4>Selamat Datang</h4>
              <p>Di <span>SIDILAN</span> Sinarmas Digital Learning</p>
              <form class="info-login">
                <div class="mb-2">
                  <label for="username" class="form-label"></label>
                  <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label"></label>
                  <input type="password" class="form-control" id="Password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger mt-4">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>