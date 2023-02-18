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


.cloud {
   position: absolute;
    left: 0%;
   top: -195px;
    right: 0%;
    bottom: 0%;
    z-index: -10;
    width: 100%;
    -webkit-filter: blur(60px);
    filter: blur(60px);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}
@keyframes cloudBig {
    from {
        transform: rotate(0deg) translate(10px) rotate(0deg);
    }
    to {
        transform: rotate(360deg) translate(10px) rotate(-360deg);
    }
}


.cloud2 {
   position: absolute;
    left: 0%;
    bottom: -1876px
    -webkit-filter: blur(60px);
    filter: blur(60px);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
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
		  <div class="cloud">
		  <div data-w-id="87c9b593-239b-478b-a6cf-5b17084d6a94" class="lottie-hero" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/632b845203cf40e09d13ecb4/632b845203cf406dcb13ecd0_Lottie%20Hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="20" data-duration="0" style="opacity: 1; animation: cloudBig 2s linear infinite;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800" width="1200" height="800" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_11"><rect width="1200" height="800" x="0" y="0"></rect></clipPath><linearGradient id="__lottie_element_15" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="1135.8299560546875" y1="525.8870239257812" x2="703.2410278320312" y2="456.77801513671875"><stop offset="0%" stop-color="rgb(246,211,101)"></stop><stop offset="100%" stop-color="rgb(255,121,82)"></stop></linearGradient><linearGradient id="__lottie_element_19" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="590.3350219726562" y1="442.38299560546875" x2="132.93099975585938" y2="478.2619934082031"><stop offset="0%" stop-color="rgb(255,122,34)"></stop><stop offset="100%" stop-color="rgb(255,74,185)"></stop></linearGradient></defs><g clip-path="url(#__lottie_element_11)"><g transform="matrix(0.9988667964935303,-0.04759287089109421,0.04759287089109421,0.9988667964935303,13.36358642578125,106.14019775390625)" opacity="1" style="display: block;"><g transform="matrix(0.9977397918701172,-0.06719622761011124,0.06719622761011124,0.9977397918701172,-42.065673828125,-29.61431884765625)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="url(#__lottie_element_19)" fill-opacity="1" d=" M325.58447265625,566.9984741210938 C395.7464599609375,570.0385131835938 480.1038513183594,591.32568359375 523.8308715820312,536.3806762695312 C565.3888549804688,484.1596984863281 476.318115234375,391.3575744628906 473.6191101074219,324.66656494140625 C471.1051025390625,262.5755615234375 538.7969970703125,195.5030059814453 499.8630065917969,147.06300354003906 C457.92999267578125,94.89299774169922 386.58795166015625,56.74835205078125 320.178955078125,65.04835510253906 C258.2259521484375,72.79135131835938 257.8550109863281,172.90467834472656 212.92201232910156,216.24667358398438 C166.4600067138672,261.06365966796875 82.15672302246094,260.2754211425781 74.32772064208984,324.3583984375 C66.0677261352539,391.96441650390625 133.72659301757812,407.3672180175781 182.51959228515625,454.8982238769531 C230.58958435058594,501.7252197265625 258.54547119140625,564.093505859375 325.58447265625,566.9984741210938 C325.58447265625,566.9984741210938 325.58447265625,566.9984741210938 325.58447265625,566.9984741210938z"></path></g></g></g></svg></div>
		</div>
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