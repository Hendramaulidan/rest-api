<?php 
$data = file_get_contents('data/pizza.json');
$menu =  json_decode($data,true);
$menu =$menu["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>


</style>
    <title>WPU Hut</title>
  </head>
  <body class="bg-light">
  
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="#">
  <img src="img/logo.png"width="230">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="#">Kategori</a>
    </div>
    </div>
</div>
</nav>
  
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h1 class="text text-primary">All Menu</h1>
        </div>
    </div>
    <div class="row">
    <?php foreach($menu as $row): ?>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 20rem;">
                <img src="img/menu/<?=$row['gambar'] ?>" class="card-fluid">
                <div class="card-body">
                <h5 class="card-title"><?=$row['nama']?></h5>
                <p class="card-text"><?=$row['deskripsi']?></p>
                <h5 class="card-title">Rp.<?=$row['harga'] ?>,-</h5>
            <a href="#" class="btn btn-outline-primary">Pesan sekarang</a>
            </div>
        </div>
    
        </div>
        <?php endforeach; ?>
    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>