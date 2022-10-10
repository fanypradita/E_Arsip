<?php 
//memulai session yang disimpan pada browser
session_start();
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="pegawai"){
//melakukan pengalihan
header("location:login/login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-SMAR</title>
    <link rel="icon" href="/BT/image/a.png" type="image/png" sizes="144x144">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <style>  
footer{
    background-color:#008080;
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        
        <a class="navbar-brand" href="halaman_admin2.php"><img src="/BT/image/logo.png" width="150" height="40" class="d-inline-block align-top rounded-circle"
            alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="halaman_admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku_admin.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Kata Kunci" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
        </div>
    </nav>

    <header>
        <div class="jumbotron jumbotron-fluid bg-petanikode text-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
                        <p class="lead">Cari dan Pinjam Buku tanah menjadi mudah dengan E-SMAR</p>
                    </div>
                </div>
           </div>
        </div>
    </header>
<!--

    <div class="container">
        <div class="row">
            <div class="col">
                
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Percobaan Bootstrap4!</h4>
                    <p>Ini adalah contoh percobaan penggunaan Bootstrap4. Saat ini bootstrap masih versi 4.0.0-beta. Saya tidak menyarankan menggunakan versi ini pada website production,
                        karena mungkin masih terdapat banyak bugs. Jadi, kita tunggu saja yang versi stabil.
                    </p>
                    <hr>
                    <p class="mb-0">Selamat belajar bootstrap...</p>
                </div>
                
                
            </div>
        </div>
    </div>
-->
    <p>


    <article class="card-post">
    <div class="container1">
        <div class="row">
            <div class="col">

                <div class="card-post card-deck">
                <div class="card">
                    <a class="card-post-link text-dark" href="https://notarisppat.org/tag/berapa-lama-proses-pembuatan-sertifikat-tanah/">
                    <img class="card-img-top" src="https://static.gatra.com/foldershared/images/2021/Hry/12-Dec/mafia_tanah.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Berapa lama proses pembuatan sertifikat tanah?</h4>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a class="card-post-link text-dark" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fblogpictures.99.co%2FWRITER-Order-Grafik-Rabu-Hukum-Pemilik-Apartemen-Bunuh-Diri.jpg-9.jpg&imgrefurl=https%3A%2F%2Fwww.99.co%2Fblog%2Findonesia%2Fsertifikat-tanah-adat%2F&tbnid=E_KFy_MlQf0l4M&vet=10CBMQxiAoAmoXChMIgO7dud_U-gIVAAAAAB0AAAAAEAc..i&docid=MmYZCefmza4AJM&w=640&h=427&itg=1&q=buku%20tanah&ved=0CBMQxiAoAmoXChMIgO7dud_U-gIVAAAAAB0AAAAAEAc">
                    <img class="card-img-top" src="https://blogpictures.99.co/WRITER-Order-Grafik-Rabu-Hukum-Pemilik-Apartemen-Bunuh-Diri.jpg-9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Cara Mengurus Sertifikat Tanah Adat Lengkap Dengan Syarat Dan Ketentuannya</h4>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a class="card-post-link text-dark" href="https://www.99.co/blog/indonesia/aturan-hukum-bpn-salah-ukur-tanah/">
                    <img class="card-img-top" src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/02/solusi-jika-BPN-salah-ukur-tanah.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Ukuran Tanah Di Sertifikat Dan Lapangan Keliru Karena BPN Salah Ukur Tanah? Ini Solusinya!</h4>
                    </div>
                    </a>
                </div>
                </div>

            </div>

        </div>
        </div>
    </div>

</article>

<p>


<!--
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
-->

    <p>

    <footer class="border border-bottom-0 border-left-0 border-right-0">
        <div class="container pt-3 pb-3 pt-md-5 pb-md-5">
            <div class="row">
                <div class="col">

                    <ul class="nav">
<!--
                        <li class="nav-item">
                            <img src="/BT/image/a.png" width="80px" height="70px"></img>
                        </li>
                        <li class="nav-item">
                            <img src="/BT/image/g.png" width="60px" height="70px"></img>
                        </li>
                        <li class="nav-item">
                            <img src="/BT/image/gt.png" width="130px" height="50px"></img>
                        </li>
                        <li class="nav-item">
                            <img src="/BT/image/l.png" width="130px" height="50px"></img>
                        </li>
-->
                    </ul>

                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>