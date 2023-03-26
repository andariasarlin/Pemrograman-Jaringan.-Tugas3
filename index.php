<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>THE MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
        
            $url = 'http://www.omdbapi.com/?apikey=8497430f&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">

<div class="container">
<div class="row ms-3 text-center">
  <div class="col">
  <h3>Series MOVIE</h3> 
  </div>
</div>
        <div class="container">
          <div class="row ms-3 text-center">
            <div class="col">
      </div>
          </div>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Search" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
         
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>The Movie</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-2">
  <div class="col">
    <div class="card">
      <img src="Frozen.jpg" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">Frozen </h5>
        <p class="card-text">Frozen adalah film fantasi musikal animasi komputer 3D Amerika 2013 yang diproduksi oleh Walt Disney Animation Studios dan dirilis oleh Walt Disney Pictures. Film fitur animasi Disney ke-53, terinspirasi oleh dongeng Hans Christian Andersen "The Snow Queen".</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Pulau.jfif" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">PulauHantu</h5>
        <p class="card-text">Pulau Hantu adalah film horor remaja yang diluncurkan pada 31 Oktober 2007 oleh MVP Pictures dan disutradarai oleh Jose Purnomo.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gangster.jfif" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">Gangster</h5>
        <p class="card-text">Jamroni is a market thug who lives in the village of Mount Merapi Valley, Yogyakarta..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Harry Potter.jfif" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">Harry Potter</h5>
        <p class="card-text">Harry Potter is a series of seven fantasy novels by British author J. K. Rowling.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="anime.jfif" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">Anime</h5>
        <p class="card-text">Anime is animation from Japan drawn by hand or using computer technology.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="argantara.jpeg" class="card-img-top" height="200px">
      <div class="card-body">
        <h5 class="card-title">Argantara</h5>
        <p class="card-text">Kehidupan SYERA, seorang siswi SMA berusia 16 tahun mendadak berubah ketika ia menikah muda dengan ARGANTARA, seorang cowok bandel yang dibencinya di sekolah dan juga ketua geng Agberos.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
