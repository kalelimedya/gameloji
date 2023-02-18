<?php include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM blog");
    $sorgu->execute();
?>
  
  <section class="service_section" style="background: url('');color:black;">
    <div class="container">
      <div class="custom_heading-container custom_heading-container">
        <h2 class="custom_heading-container">
          BLOG
        </h2>
      </div>
      <div class="service_container layout_padding2">
        <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="service_box">
          <div class="img-box">
            <img src="images/<?php echo $sorgucek['blog_img'] ?>" alt="<?php echo $sorgucek['blog_header'] ?>"/>
          </div>
          <div class="detail-box">
            <h4>
              <?php echo $sorgucek["blog_header"] ?>
            </h4>
            <p>
             
              <?php echo substr($sorgucek["blog_text"],0,50) ?>
            </p>
                  <div>
                    <a href="post.php?link=<?php echo $sorgucek['blog_seo'] ?>">
                      Devamını oku
                    </a>
                  </div>
          </div>
        </div>
        
       

      
    <?php } ?>
    </div>
    </div>
  </section>
<?php include 'footer.php'; ?>