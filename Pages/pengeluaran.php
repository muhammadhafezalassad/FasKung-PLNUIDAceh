<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"href="css/penempatan.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Assets/Logo_PLN.png" alt="">
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
                        <a href="../index.php">
                        <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-links">
                      <a href="penempatan.php">
                      <i class='bx bxs-archive-in icon' ></i>
                            <span class="text nav-text">Penempatan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="penarikan.php">
                      <i class='bx bxs-archive-out icon' ></i>
                            <span class="text nav-text">Penarikan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="pengeluaran.php">
                      <i class='bx bxs-archive icon' ></i>
                            <span class="text nav-text">Pengeluaran Sementara Barang</span>
                      </a>

                    </li>

                    
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Keluar</span>
                    </a>
                </li>

                
                
            </div>
        </div>

    </nav>

    <section class="home" id="home">
        <h1 class="text"><b id="text1">Pengeluaran Sementara Barang</b><br>Fasiltas Pendukung</h1>
        <div class="buttons">
            <div class="grid">
                <div class="buttons">
                <div class="backBtn">
                        
                        <button onclick="location.href='formulir.php'" type="button" id="button">
                        <i class='bx bxs-bookmark-alt-plus' ></i>
                        <span class="btnText">Tambah Data</span>
                        </button>

                        </div>
                </div>
                
                <div class="buttons">
                <div class="backBtn">
                        
                        <button onclick="location.href=''" type="button" id="button">
                        <i class='bx bxs-file-pdf' ></i>
                        <span class="btnText">Cetak PDF</span>
                        </button>

                        </div>
                </div>

                <div class="buttons">
                    <div class="backBtn">
                        
                        <button onclick="location.href=''" type="button" id="button">
                        <i class='bx bxs-spreadsheet'></i>
                        <span class="btnText">Cetak Excel</span>
                        </button>

                    </div>
                </div>
                

            </div>
        <div class="table">
        
        
        <table class="content-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Merk/Type</th>
                    <th>Nomor Seri</th>
                    <th>Nomor Barang</th>
                    <th>Satuan Jumlah</th>
                    <th>Jumlah</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Meja</td>
                    <td>Jepara</td>
                    <td>01</td>
                    <td>001</td>
                    <td>1</td>
                    <td>10</td>
                    <td>Null</td>
                    <td>Baik</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kursi</td>
                    <td>Jepara</td>
                    <td>02</td>
                    <td>002</td>
                    <td>1</td>
                    <td>10</td>
                    <td>Null</td>
                    <td>Baik</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Papan Tulis</td>
                    <td>Jepara</td>
                    <td>01</td>
                    <td>001</td>
                    <td>1</td>
                    <td>10</td>
                    <td>Null</td>
                    <td>Baik</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lemari</td>
                    <td>Jepara</td>
                    <td>02</td>
                    <td>002</td>
                    <td>1</td>
                    <td>10</td>
                    <td>Null</td>
                    <td>Baik</td>
                </tr>
            </tbody>
         
        </table>
       

            
        </div>
        
                        
                        
        </div>
  
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
