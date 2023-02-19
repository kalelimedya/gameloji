<?php include 'header.php';
    $sorgu=$db->prepare("SELECT * FROM blog WHERE blog_seo='{$_GET['link']}'");
    $sorgu->execute();
 ?>

<style>

.blog-text {
	
    color: var(--light-gray);
    font-size: var(--fs-6);
    font-weight: var(--fw-300);
    line-height: 1.6;
	text-align: center;
}


</style>



 <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

       <section class="welcome_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
         <?php echo $sorgucek["blog_header"] ?>
        </h2>
      </div>
      <div class="layout_padding2">
        <div class="img-box">
          <img src="images/welcome.png" alt=""/>
        </div>
        <div class="detail-box">
          <p>
              <?php echo $sorgucek["blog_text"] ?>
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <?php } ?>


<?php include 'footer.php'; ?>

