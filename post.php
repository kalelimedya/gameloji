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


 <section style="margin-bottom:40px;padding-top: 20px;">
 <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

       <div class="custom_heading-container custom_heading-container">
        <h2 class="custom_heading-container">
         <?php echo $sorgucek["blog_header"] ?>
        </h2>
      </div>
 <div class="service_container layout_padding2">


          <div style="  height: 403px;" class="service_box">
          <div style="text-align: center;" class="img-box">
            <img style="height: 250px;" src="images/<?php echo $sorgucek['blog_img'] ?>" alt="<?php echo $sorgucek['blog_header'] ?>"/>
          </div>
		  </div>
<div class="blog-text">
<p>
             
              <?php echo $sorgucek["blog_text"] ?>
              
            </p>
 </div>
</div>
</section>
  <?php } ?>


<?php include 'footer.php'; ?>

