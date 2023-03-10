<?php include 'header.php'; ?>


<?php if(@$_GET["durum"]=="ok") { ?>
<script>Swal.fire('Mesajınız başarılı bir şekilde gönderildi.', '', 'success')</script>
<?php } ?>


<?php if(@$_GET["durum"]=="no") { ?>
<script>Swal.fire('Lütfen CAPTCHA kutusunu işaretleyin.', '', 'error')</script>
<?php } ?>

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
	
		<div style="text-align: -webkit-center;" class="g-recaptcha" 
                data-sitekey="6LcjmK0eAAAAAClFgo2ACdu1HxnudSeE7bMoLqpY">
            </div>

    <div class="d-flex justify-content-center">
      <button type="submit" name="contactadd" class="">Gönder</button>
    </div>
    </form>
    
  </section>
  
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php include 'footer.php'; ?>