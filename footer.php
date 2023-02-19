   <?php $sorgu=$db->prepare("SELECT * FROM blog ORDER BY id DESC LIMIT 4");
    $sorgu->execute();
?>

  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
         <?php echo $ayarcek["site_sahip_mail"] ?>
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Diğer Sayfalarımız
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="index.php">
                      Anasayfa
                    </a>
                  </li>
                  <li>
                    <a href="service.php">
                      Hizmetlerimiz
                    </a>
                  </li>
                  <li>
                    <a href="blog.php">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="">
                      İletişim
                    </a>
                  </li>
                </ul>
              
              </div>
            </div>
			
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Son Gönderiler
                </h5>
              </div>
              <div class="d-flex ">
                  <ul>
				    <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                  <li>
				  
 <a href="post.php?link=<?php echo $sorgucek['blog_seo'] ?>">
                      <?php echo $sorgucek["blog_header"] ?>
                    </a>
                  </li>
				   <?php } ?>
                </ul>
              </div>
            </div>
			   
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Adresimiz
                </h5>
              </div>
              <div class="d-flex ">
                <iframe src="<?php echo $ayarcek['site_harita'] ?>" width="600" height="250" style="border:0.5px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="<?php echo $ayarcek['site_facebook'] ?>">
              <img src="images/fb.png" alt="facebook"/>
            </a>

            <a href="<?php echo $ayarcek['site_twitter'] ?>">
              <img src="images/twitter.png" alt="twitter"/>
            </a>
            <a href="<?php echo $ayarcek['site_linkedin'] ?>">
              <img src="images/linkedin1.png" alt="linkedin"/>
            </a>
            <a href="<?php echo $ayarcek['site_instagram'] ?>">
              <img src="images/instagram1.png" alt="instagram"/>
            </a>
          </div>
          <div class="form_container mt-5">
           
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        © 2023 Bütün hakları saklıdır. Developed by
        <a href="https://yigithangumus.com">Yigithan&Eren</a>
      </p>
    </section>
    <!-- footer section -->
  </div>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



</body></html>