<?php include 'header.php'; ?>
<style>
  .item-1 {
    border: 2px solid #54299c;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-right: 10px;
    padding-left: 10px;
    transition: 1000ms all;
    box-shadow: 3px 5px #54299c;
    opacity: 80%;
    filter: blur(0.5px);
  }
  .item-1:hover {
    border: 2px solid #814cda;
    box-shadow: 3px 5px #814cda;
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
    

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
            Oyunlarımız
        </h2>
      </div>
      <div class="layout_padding2">
        <div class="item-1" style="margin-bottom: 20px;">
          <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/gif1.gif" style="border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h2 style="text-align: left;">Egg it Up</h2>
                    <p style="text-align: left;">Yumurtayı tavalarda zıplatarak puan ve para biriktir, rakiplerini geç ve ödülleri kazan!</p>
                    <div class="text-left">
                      <a href="contact.php" class="btn btn-secondary" style="border-radius:5px;">
                        <i class="fa-brands fa-google-play"></i>  Google Play Store
                      </a> <br>
                       <a href="contact.php" class="btn btn-secondary" style="border-radius:5px;margin-top: 10px;">
                        <i class="fa-brands fa-app-store-ios"></i> App Store
                      </a>
                    </div>
                  </div>
            </div>
        </div>

      </div>

    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->

 
  <!-- end problem section -->
  

  <!-- end client section -->
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading custom_heading-container">
      <h2>
        OYUN YAPTIRMAK İÇİN İLETİŞİME GEÇİN!
      </h2>
     
    </div>
    <form action="islemler/ajax.php" method="POST">
    <div class="container">
      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">İsim</label>
            <input type="text" name="name" required="" class="form-control" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">E-Posta</label>
            <input type="email" name="email" required="" class="form-control" id="inputEmail4"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Telefon Numarası</label>
            <input type="text" name="tel" required="" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputNumber4">Firma</label>
            <input type="text" name="business" required="" class="form-control" id="inputNumber4"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputMessage">Mesaj</label>
          <textarea name="message" required="" class="form-control" id="inputMessage" placeholder="Yaptırmak istediğiniz oyunu buraya yazınız!"></textarea>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      <button type="submit" name="contactadd" class="">Gönder</button>
    </div>
    </form>
    
  </section>

<?php include 'footer.php'; ?>