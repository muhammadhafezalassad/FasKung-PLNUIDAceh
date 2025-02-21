<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"href="css/formulir.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>


    <section class="home" id="home">
    <h1 class="text"><b>Formulir Penempatan Barang</b><br>Fasiltas Pendukung</h1>
    <div class="container">
    <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title"><b>Detail Barang</b></span>

                    
                    <div class="fields">
                        

                        <div class="input-field">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" required>
                        </div>

                        <div class="input-field">
                            <label>Merk/Type</label>
                            <input type="text" name="merk_barang" placeholder="Masukkan Merk/Type" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Seri</label>
                            <input type="text" name="nomor_seri" placeholder="Masukkan Nomor Seri" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Barang</label>
                            <input type="text" name="nomor_barang" placeholder="Masukkan Nomor Barang" required>
                        </div>

                        <div class="input-field">
                            <label>Satuan</label>
                            <input type="number" name="satuan_jumlah" placeholder="Masukkan Satuan Jumlah" required>
                        </div>

                        <div class="input-field">
                            <label>Jumlah</label>
                            <input type="number" name="jumlah" placeholder="Masukkan Jumlah" required>
                        </div>
                        
                        
                        <div class="input-field">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" placeholder="Masukkan Keterangan" required>
                        </div>
                        
                      
                        
                    </div>
                    
                    
                </div>
                

                

                    <div class="buttons">
                        
                        
                        <div class="backBtn">
                        
                        <button onclick="location.href='penempatan.php'" type="button" id="button">
                        <i class='bx bxs-left-arrow-square' ></i>
                            Kembali
                        </button>
  
                        </div>
                       
                        <div class="backBtn">
                        <button  type="submit" name="proses">
                        <i class='bx bxs-save' ></i>
                            Simpan
                        </button>
                        </div>
                    </div>
                </div> 
            </div>
        </form>


            
        </div>
        
  
</section>



   

</body>
<script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
    
      

      function dipilih (pilihan, kondisi){
        var pilihan = document.getElementById('pilihan');
        var kondisi = document.getElementById('non');
        if(pilihan.value == "Pengeluaran Sementara Barang"){
            classList.toggle("pengeluaran");
        }
      }



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

<?php 
include"../koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "INSERT INTO penempatan set
    nama_barang = '$_POST[nama_barang]',
    merk_barang = '$_POST[merk_barang]',
    nomor_barang = '$_POST[nomor_barang]',
    nomor_seri = '$_POST[nomor_seri]',
    satuan_jumlah = '$_POST[satuan_jumlah]',
    jumlah = '$_POST[jumlah]',
    keterangan = '$_POST[keterangan]'");

    echo "<script>window.alert('Data Disimpan')
    window.location='penempatan.php'</script>";
   
}

?>