<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="Assets/Logo_PLN.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">PLN UNIT INDUK WILAYAH</span>
                    <span class="profession">ACEH</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Cari">
                </li>

                <ul class="menu-links"> 
                    <li class="nav-link">
                        <a href="index.php">
                        <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-links">
                      <a href="Pages/penempatan.php">
                      <i class='bx bxs-archive-in icon' ></i>
                            <span class="text nav-text">Penempatan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="Pages/penarikan.php">
                      <i class='bx bxs-archive-out icon' ></i>
                            <span class="text nav-text">Penarikan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="Pages/pengeluaran.php">
                      <i class='bx bxs-archive icon' ></i>
                            <span class="text nav-text">Pengeluaran Sementara Barang</span>
                      </a>

                    </li>

                   
                    
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Login/login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Keluar</span>
                    </a>
                </li>

                
                
            </div>
        </div>

    </nav>

    <section class="home" id="home">
        <h1 class="text"><b><span id="text0">Sistem Pendataan Inventaris</span></b><br>Fasiltas Pendukung</h1>
        <div class="date" onload="getDate()" class="form-control" id="date" 
                      name="date"><input type="date"></div>

        <div class="grid">
            <div class="middle1">
            <i class='bx bxs-archive-in icon'></h4></i>
            <h3>Penempatan Barang</h3>
            <div class="left"><h4>Jumlah Barang</h4></div>

            <?php 
            
            include"koneksi.php";
 
            $ambildata = mysqli_query($koneksi, "SELECT COUNT(*) FROM penempatan");
            $row = mysqli_fetch_array($ambildata);    
                echo "
                <h2>$row[0]</h2>
                "
            
            ?>
            
            </div>

            <div class="middle2">
            <i class='bx bxs-archive-out icon'></i>
            <h3>Penarikan Barang</h3>
            <div class="left"><h4>Jumlah Barang</h4></div>
            <h2>0</h2>
            </div>

            <div class="middle3">
            <i class='bx bxs-archive icon'></i>
            <h3>Pengeluaran Sementara Barang</h3>
            <div class="left"><h4>Jumlah Barang</h4></div>
            <h2>0</h2>
            </div>


            
        </div>
  
</section>

<section class="penempatan" id="penempatan">
        
            
        <div></div>
  
</section>
<!--
    <section class="home">
        <div class="text"><b>Sistem Pendataan Inventaris</b><br class="br">Fasilitas Pendukung</div>
        
       
        <h1 id="dashboard">Dashboard</h1>
    </section>
-->


   

</body>
<script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

var date = new Date();
var year = date.getFullYear();
var month = date.getMonth()+1;
var todayDate = String(date.getDate()).padStart(2,'0');
var pattern = year + '/' + month + '/' + todayDate;
document.getElementById('date').value = pattern;
document.write(pattern);


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});





    </script>
</html>
