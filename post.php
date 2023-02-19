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

  <section class="welcome_section layout_padding" style="margin-bottom:100px;">
    <div class="container" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;border-radius: 20px;
">
      <div class="custom_heading-container">
        <h2 style="margin-top:20px;">
         <?php echo $sorgucek["blog_header"] ?>
        </h2>
      </div>
	   <p style="display: block;
    font-size: 12px;
    font-style: italic;
    color: #b4b4b4;
    margin-bottom: 5px;"> <?php echo $sorgucek["blog_author"] ?> tarafından <?php echo $sorgucek["blog_date"] ?> tarihinde yayınlandı</p>
      <div class="layout_padding2">
        <div class="img-box">
           <img src="images/<?php echo $sorgucek['blog_img'] ?>" alt="<?php echo $sorgucek['blog_header'] ?>" style="border-radius: 10px;border:0.5px solid darkgrey;">
        </div>
        <div class="detail-box">
         
        
             <?php echo $sorgucek["blog_text"] ?>
         
       
       
        </div>
      </div>

    </div>
  </section>

  <?php } ?>


<?php include 'footer.php'; ?>

