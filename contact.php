<?php include 'header.php'; ?>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading custom_heading-container">
      <h2>
        BİZE ULAŞ
      </h2>
      <p>
        
      </p>
    </div>
   
         <form action="islemler/ajax.php" method="POST">
    <div class="container">
       <?php if(@$_GET["durum"]=="ok") { ?>
        <div class="alert alert-success">
            <b>Mesaj gönderimi başarılı!</b>
        </div>
    <?php } ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Adınız ve Soyadınız</label>
            <input type="text" name="name" class="form-control" required="" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">E-Posta</label>
            <input type="email" name="email" class="form-control" id="inputEmail4"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Telefon Numaranız</label>
            <input type="text" name="tel" required="" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputNumber4">Firmanız</label>
            <input type="text" name="business" required="" class="form-control" id="inputNumber4"/>
          </div>

        </div>

        <div class="form-group">
          <label for="inputMessage">Mesajınız</label>
          <textarea type="text" name="message" required="" class="form-control" id="inputMessage" placeholder=""></textarea>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      <button type="submit" name="contactadd" class="">Gönder</button>
    </div>
    </form>
    
  </section>

<?php include 'footer.php'; ?>