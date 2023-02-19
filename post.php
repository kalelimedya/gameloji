<?php include 'header.php';
    $sorgu=$db->prepare("SELECT * FROM blog WHERE blog_seo='{$_GET['link']}'");
    $sorgu->execute();
 ?>

 <div class="container">
 <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

       <div class="custom_heading-container custom_heading-container">
        <h2 class="custom_heading-container">
         <?php echo $sorgucek["blog_header"] ?>
        </h2>
      </div>
 <div class="service_container layout_padding2">





 
</div>
</div>
  <?php } ?>


<?php include 'footer.php'; ?>

