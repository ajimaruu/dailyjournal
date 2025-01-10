<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Article </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<script type="text/javascript">
  window.setTimeout("tampilWaktu()", 1000);

  function tampilWaktu(){
    var waktu = new Date();
    var bulan = waktu.getMonth() + 1;

    setTimeout("tampilWaktu()", 1000);
    document.getElementById("tanggal").innerHTML =
      waktu.getDate() + "/" + bulan + "/" +  waktu.getFullYear();
    document.getElementById("jam").innerHTML = 
      waktu.getHours() +
      ":" + 
      waktu.getMinutes() +
      ":" +
      waktu.getSeconds(); 
      }
</script>


<body>
    <nav class="navbar sticky-top  navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">My Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
              <a class="nav-link" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#article">Article</a>
              <a class="nav-link" href="#gallery">Gallery</a>
              <a class="nav-link" href="#schedule">Schedule</a>
              <a class="nav-link" href="#about">About Me</a>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
              <button type="button" class="btn btn-dark"  id="dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                    <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                  </svg>
              </button>
              <button type="button" class="btn btn-danger" id="light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                  </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>

      <div class="container"> <section id="hero" class="text-sm-start p-5 bg-danger-subtle">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://assets.kompasiana.com/items/album/2024/09/24/screenshot-2024-09-24-at-20-22-19-66f2bd12c925c4042049db32.png?t=o&v=300" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">Windah Basudara</h1>
                    <h4 class="lead display-6">Brando Franco Windah (lahir 14 Maret 1992) dikenal sebagai Windah Basudara</h4>
                    <h6>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </h6>
                  </div>
            </div>
        </section></div>

<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
<!-- gallery start -->
    <<div class="container">
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <h1 class="fw-bold display-4 pb-3">
            <div>Gallery</div>
        </h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <?php
                include "koneksi.php";

                // Query data gallery dari database
                $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                $result = $conn->query($sql);
                $isFirst = true; // Flag untuk menentukan item pertama sebagai 'active'

                while ($row = $result->fetch_assoc()) {
                    $activeClass = $isFirst ? "active" : "";
                    $isFirst = false;
                ?>
                    <div class="carousel-item <?= $activeClass ?>">
                        <img src="img/<?= $row['gambar'] ?>" class="d-block w-100" alt="Gambar">
                    </div>
                <?php
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
<!-- gallery end -->

    <div class="container"><section id="schedule" class="text-center p-5">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <div clas="col">
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-danger text-light">
                  Senin
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Basis Data <br>08.4-10.20|H.5.14</li>
                </ul>
              </div>
            </div>
            <div clas="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-danger text-light">
                      Selasa
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Sistem Operasi <br> 07.00-09.30|H.4.10</li>
                      <li class="list-group-item">Pendidikan Kewarganegaraan <br> 10.20-12.00|Aula H7</li>
                    </ul>
                  </div>
                </div>
                <div clas="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header bg-danger text-light">
                          Rabu
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Pemrograman Berbasis Web <br> 07.00-08.40|D.2.7 </li>
                          <li class="list-group-item">Basis Data <br> 08.40-10.20|D.3.M</li>
                        </ul>
                      </div>
                    </div>
                    <div clas="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header bg-danger text-light">
                              Kamis
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Probabilitas Dan Statistik <br> 07.00-09.30|H.4.8</li>
                              <li class="list-group-item">Rekayasa Perangkat Lunak <br> 09.30-12.00|H.4.5</li>
                            </ul>
                          </div>
                        </div>
                        <div clas="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header bg-danger text-light">
                                  Jumat
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Logika Informatika <br> 07.00-09.30|H.4.9</li>
                                  <li class="list-group-item">Sistem Informasi <br> 09.30-12.00|H.4.6</li>
                                </ul>
                              </div>
                            </div>
                            <div clas="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header bg-danger text-light">
                                      Sabtu
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Free</li>
                                    </ul>
                                  </div>
                                </div>
         </div>
    </section></div>

    <div class="container"> <section id="about" class="text-sm-start p-5 bg-danger-subtle ">
        <div class="d-sm-flex flex-sm-row align-items-center justify-content-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFYrvrCA0O__c7cGcUUtSpAVEsd5nxJnIOeA&s" class="img-fluid rounded-circle" width="300">
            <div>
                <h4 class="lead display-7">A11.2023.14885</h4>
                <h1 class="fw-bold display-4">Aji Bayu Seno</h1>
                <h4 class="lead display-7">Program Studi Teknik Informatika</h4>
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="https://dinus.ac.id/"><h4 class="lead display-7 text-dark fw-bold">Universitas Dian Nuswantoro</h4>
                <h6>
                  <span id="tanggal"></span>
                  <span id="jam"></span>
                </h6>
              </div>
        </div>
    </section></div>

    <footer class="text-center p-5 ">
        <div class="grid gap-3">
              <a href="https://www.instagram.com/udinusofficial"><svg xmlns="http://www.w3.org/2000/svg" id="logo1" width="50" height="50" fill="currentcolor" class="p-2 g-col-6 bi bi-instagram text-black" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg></a> 
              
              <a href="https://twitter.com/udinusofficial"><svg xmlns="http://www.w3.org/2000/svg" id="logo2" width="50" height="50" fill="currentcolor" class="p-2 g-col-6 bi bi-twitter-x text-black" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
              </svg></a>

              <a href="https://wa.me/+6289503300923"><svg xmlns="http://www.w3.org/2000/svg" id="logo3" width="50" height="50" fill="currentcolor" class="p-2 g-col-6 bi bi-whatsapp text-black" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg></a>
        </div>
        <div>
            <p1 class="" id="footer">Aji Bayu Seno © 2024</p1>
        </div>
    </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      document.getElementById("dark").onclick = function() {
        document.body.classList.add("bg-dark")
    
        document.getElementById("hero").classList.remove("bg-danger-subtle");
        document.getElementById("hero").classList.add("bg-secondary");
        document.getElementById("hero").classList.add("text-white");

        document.getElementById("gallery").classList.remove("bg-danger-subtle");
        document.getElementById("gallery").classList.add("bg-secondary");
        document.getElementById("gallery").classList.add("text-white");

        document.getElementById("article").classList.add("text-white"); 

        document.getElementById("card").classList.add("text-bg-secondary");
        document.getElementById("card2").classList.add("text-bg-secondary");
        document.getElementById("card3").classList.add("text-bg-secondary");        
        document.getElementById("card4").classList.add("text-bg-secondary");
        document.getElementById("card5").classList.add("text-bg-secondary");

        document.getElementById("logo1").classList.remove("text-black");
        document.getElementById("logo2").classList.remove("text-black");
        document.getElementById("logo3").classList.remove("text-black");

        document.getElementById("footer").classList.add("text-white");
        document.getElementById("logo1").classList.add("text-white");
        document.getElementById("logo2").classList.add("text-white");
        document.getElementById("logo3").classList.add("text-white");
        
        document.getElementById("schedule").classList.add("text-white"); 

        document.getElementById("about").classList.remove("bg-danger-subtle");
        document.getElementById("about").classList.add("bg-secondary");
        document.getElementById("about").classList.add("text-white");

      };

      document.getElementById("light").onclick = function() {
        document.body.classList.remove("bg-dark")
    
        document.getElementById("hero").classList.remove("bg-secondary");
        document.getElementById("hero").classList.add("bg-danger-subtle");
        document.getElementById("hero").classList.remove("text-white");

        document.getElementById("gallery").classList.remove("bg-secondary");
        document.getElementById("gallery").classList.add("bg-danger-subtle");
        document.getElementById("gallery").classList.remove("text-white");

        document.getElementById("article").classList.remove("text-white");

        document.getElementById("card").classList.remove("text-bg-secondary");
        document.getElementById("card2").classList.remove("text-bg-secondary");
        document.getElementById("card3").classList.remove("text-bg-secondary");        
        document.getElementById("card4").classList.remove("text-bg-secondary");
        document.getElementById("card5").classList.remove("text-bg-secondary");

        document.getElementById("footer").classList.remove("text-white");

        document.getElementById("logo1").classList.remove("text-white");
        document.getElementById("logo2").classList.remove("text-white");
        document.getElementById("logo3").classList.remove("text-white");

        document.getElementById("logo1").classList.add("text-black");
        document.getElementById("logo2").classList.add("text-black");
        document.getElementById("logo3").classList.add("text-black");

        document.getElementById("schedule").classList.remove("text-white");

        document.getElementById("about").classList.remove("bg-secondary");
        document.getElementById("about").classList.add("bg-danger-subtle");
        document.getElementById("about").classList.remove("text-white");
    };
    
    </script>
  </body>
</html>