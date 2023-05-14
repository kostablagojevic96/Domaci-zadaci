<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>

<body class="text-bg-success bg-opacity-50"> 
  <header>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-primary">
      <div class="container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav col">
            <a id="myLink" class="nav-link col-3 d-flex justify-content-lg-center text-white" href="?action=get_posao">Posao</a>
            <a class="nav-link col-3 d-flex justify-content-lg-center text-white" href="?action=get_zdravlje">Zdravlje</a>
            <a class="nav-link col-3 d-flex justify-content-lg-center text-white" href="?action=get_ljubav">Ljubav</a>
            <a class="nav-link col-3 d-flex justify-content-lg-center text-white" href="?action=get_motivacija">Motivacija</a>
          </div>
        </div>
      </div>
    </nav> 
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!--<img src="images/slika1.jpg" class="d-block w-100" alt="slika1">-->
           <?php echo getRandomImage("images") ?>
          </div>
            <div class="carousel-item">
            <?php echo getRandomImage("images") ?>
            </div>
          <div class="carousel-item">
            <?php echo getRandomImage("images") ?>
            <!--<div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>-->
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </header>
<section class="vh-100 ">
  <div class="container py-5 h-50 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col col-lg-10 col-xl-8 ">
        <div class="card bg-primary text-white rounded-3 mb-3 shadow-lg rounded">
          <div class="card-body p-4 ">
            <figure class="mb-0 ">
              <blockquote class="blockquote">
                <p class="pb-2 ">
                  <?php
                    if(isset($_GET['action'])) {
                      $action = $_GET ['action'];
                      if($action === 'get_posao'){
                        $filename = __DIR__ . '/Posao.txt';
                        $citat = random($filename);
                        echo $citat;
                      }
                      if($action === 'get_zdravlje'){
                        $filename = __DIR__ . '/Zdravlje.txt';
                        $citat = random($filename);
                        echo $citat;
                      }
                      if($action === 'get_ljubav'){
                        $filename = __DIR__ . '/Ljubav.txt';
                        $citat = random($filename);
                        echo $citat;
                      }
                      if($action === 'get_motivacija'){
                        $filename = __DIR__ . '/Motivacija.txt';
                        $citat = random($filename);
                        echo $citat;
                      }
                    }
                  ?>
                </p>
              </blockquote>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 px-5 border-top bg-dark fixed-bottom bg-opacity-85">
    <div class="col-md-4 d-flex align-items-center">
    
      <span class="mb-3 mb-md-0">
      <?php date_default_timezone_set('Europe/Belgrade');
    $time = date('d.m.Y.  H:i');
    echo "$time";
    ?>
      </span>
    </div>
</footer>
<?php
//$filename = __DIR__ . '/Posao.txt';
function random($filename){
$file = file_get_contents($filename);
$even = [];
$odd = [];
$zbir = [];
$promesaj = [];
$niz = explode("\n", $file);

for ($i = 0; $i < count($niz); $i++) {
    if ($i % 2 === 0) {
        $even[] = $niz[$i];
    } else {
        $odd[] = $niz[$i];
    }
}
for ($i = 0; $i < count($even) && $i < count($odd); $i++) {
    $zbir[] = $even[$i] . '<figcaption class="blockquote-footer mb-0 text-white">' . $odd[$i] . '</figcaption>';
}
$promesaj = $zbir[array_rand($zbir)];
return $promesaj;
}

function getRandomImage($putanja = NULL){
  if(!empty($putanja)){
      $files = scandir($putanja);
      $count = count($files);
      if($count > 2){
          $index = rand(2, ($count-1));
          $filename = $files[$index];
          return '<img src="'.$putanja."/".$filename.'" alt="'.$filename.'">';
      } else {
          return "The directory is empty!";
      }
  } else {
      return "Please enter valid path to image directory!";
  }
}
//echo getRandomImage("images");
?>
</body>
</html>

