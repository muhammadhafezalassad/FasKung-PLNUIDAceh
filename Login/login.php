
<!DOCTYPE html><html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial Tanggal Indonesia</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment-with-locales.js"></script>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.js"></script>
    <title>Sign in & Sign up Form</title>
    
  </head>
  <body>
    <div class="container">   
      <div class="forms-container">   
        <div class="signin-signup">       
          <form action="#" class="sign-in-form">         
            <h2 class="title">Masuk</h2>
            <?php  echo date('l, d-m-Y h:i:s a'); ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Pengguna" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Kata Sandi" placeholder="Kata Sandi" />
            </div>
            <a href="../index.php"><div type="submit" value="Masuk" class="paak">Masuk</div></a>
           
            
            
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Pengguna" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Kata Sandi" placeholder="Kata Sandi" />
            </div>
            <input type="submit" class="btn" value="Daftar" />
            
          </form>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <div>
              <img src="img/logos.png" class="imagess" alt="" height="200" width="-200" />
            </div>
            <div>
              
            </div>
            <h3>Sistem Pendataan Inventaris </h3>
            <h4>Fasilitas Pendukung</h4>
            <p>
              Belum Punya Akun? Daftar Disini 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="img/logoss.png" class="image" alt=""/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <div>
              <img src="img/logos.png" class="imagess" alt="" height="200" width="-200" />
            </div>
            <h3>Sistem Pendataan Inventaris </h3>
            <h4>Fasilitas Pendukung</h4>
            <p>
              Sudah Punya Akun? Masuk disini
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="img/logosss.png" class="image" alt=""  />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
PLN Unit Wilayah Aceh</script>
</body>
</html>
