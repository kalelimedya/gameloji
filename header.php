<?php include 'islemler/vt.php'; 
      $sorgu2=$db->prepare("SELECT * FROM slider");
      $sorgu2->execute();
      $say=1;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>


  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="<?php echo $ayarcek['site_keywords'] ?>" content=""/>
  <meta name="<?php echo $ayarcek['site_tanim'] ?>" content=""/>
  <meta name="<?php echo $ayarcek['site_yazari'] ?>" content=""/>

  <title><?php echo $ayarcek['site_baslik'] ?></title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
  <script src="https://kit.fontawesome.com/77b52c446f.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/77b52c446f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">  

</head>
<style type="text/css">
* {
  font-family: Montressat;
}
</style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section ustmenu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php">
                <img src="images/<?php echo $ayarcek['site_logo'] ?>" name="site_logo" class="img-fluid" width="75">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav ustmenu">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">İşlerimiz <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.php">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="blog.php">Blog </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">İletişim</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <style>
  .item-1 {
    border: 2px solid #e3e3e3;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-right: 10px;
    padding-left: 10px;
    transition: 1000ms all;
    box-shadow: 3px 5px #e3e3e3;
    opacity: 80%;
    filter: blur(0.5px);
  }
  .item-1:hover {
    border: 2px solid #737070;
    box-shadow: 3px 5px #737070;
    transition: 1000ms all;
    opacity: 100%;
     filter: blur(0px);
     border-radius: 15px;
  }
  @media (min-width: 500px) {
    .item-1 {
      text-align: center;
    }
}
</style>
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      Eğlendiren <br> Oyunların Fabrikası
                    </h1>
                    <p>
                      Eğlendiren ve her zaman eğlendirmeye devam edecek maceramıza siz de katılmak ister misiniz?
                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn-1">
                        İletişim
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/gif4.gif" style="border-radius: 10px;" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php while($slidercek=$sorgu2->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      <?php echo $slidercek["slider_title"] ?>
                    </h1>
                    <div>
                       <?php echo $slidercek["slider_text"] ?>
                   </div>
                    <div class="btn-box">
                      <a href="contact.php" class="btn-1">
                        İletişim
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/<?php echo $slidercek['slider_img'] ?>" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

    <!-- end header section -->