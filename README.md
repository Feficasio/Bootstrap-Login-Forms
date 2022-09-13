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
  <style>
  body {
    background-image: url(https://wallpaperaccess.com/full/622548.jpg);
    background-size: cover;
}
.info-panel {
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    margin: auto;
    margin-top: 100px;
    background-color: white;
    padding: 30px;
}

.info-panel img {
  width: 564px;
  height: 352px;
  margin-right: 20px;
  margin-bottom: 10px;
}

.info-panel .gambar {
    width: 120px;
    height: 30px;
    margin-left: 40px;
    margin-bottom: 50px;
}

.info-panel h4 {
    font-weight: 450;
    font-size: 28px;
    margin: 20px 100px 0px;
}

.info-panel p {
    font-size: 20px;
    font-weight: 500;
    margin: -15px 100px 0px;
}

.info-panel span {
    font-size: 50px;
}

.info-login {
    margin-top: 30px;
    background-color: white;
    padding: 0px 80px 0;
}

.form-control {
    border: 1;
    border-bottom: 1px solid #e7e7e7;
    font-size: 15px;
    padding: 22px;
    font-weight: 350;
    margin-bottom: 10px;
    margin-top: -20px;
}



  </style>
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
