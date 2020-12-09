      <div class="bg-image img1">
        <hr class="separator">
        <p class="image-header">AVISHEK DANGOL</p>
        <hr class="separator-bottom">
      </div> 


      <section id="project">
        <h2>FEATURED PROJECTS</h2>

        <div class="showcase">
	  <?php
            $data = new \Portfolio\Images('featured', 'featured');
	    $data->displayData();
	  ?>
        </div>
      </section>


      <div class="bg-image img2">
        <hr class="separator">
        <p class="image-header">PHOTOGRAPHY</p>
        <div class="transition">
        <a class="header-button" href="photography">VIEW ALL</a>
        </div>
        <hr class="separator-bottom">
      </div> 

      <section id="software">
        <h2>Softwares I Use</h2>    
        <div class="showcase-software">

          <div class="catch">
            <img id="photoshop" class="software-icon" src="Assets/Icons/photoshop.png" alt="">
            <p class="software-title">Adobe Photoshop</p>
          </div>

          <div class="catch">
            <img id="lightroom" class="software-icon" src="Assets/Icons/lightroom.png" alt="">
            <p class="software-title">Adobe Lightroom</p>
          </div>

          <div class="catch">     
            <img id="illustrator" class="software-icon" src="Assets/Icons/illustrator.png" alt="">
            <p class="software-title">Adobe Illustrator</p>
          </div>

          <div class="catch">
            <img id="premiere-pro" class="software-icon" src="Assets/Icons/premiere-pro.png" alt="">
            <p class="software-title">Adobe Premiere Pro</p>
          </div>
        </div>

        <div id="container">
          <img id="des-icon" src="https://img.icons8.com/fluent/96/adobe-photoshop.png" alt="">
          <p id="des-para" class="des-para">I use Adobe Photoshop to edit images, enhance them, change their background, manipulate them, play around with text effects and photo effects and to create animated GIFs. The Camera Raw within Adobe Photoshop is really helpful in photo enhancement.</p>
          <p id="des-para1" class="des-para">I use Adobe Photoshop to edit images, enhance them, change their background, manipulate them, play around with text effects and photo effects and to create animated GIFs. The Camera Raw within Adobe Photoshop is really helpful in photo enhancement.</p>
          <p id="des-para2" class="des-para">If you want to enhance a lot of your photos quickly, Adobe Lightroom is what you need. I use Adobe Lightroom especially to enhance bulk photos, since it has a beautiful way to enhance many photos within a short period of time. </p>
          <p id= "des-para3" class="des-para">When dealing with vectors, all we need is Adobe Illustrator. I use Adobe Illustrator for all kinds of vector works like banner designs, logo designs and much more. I have been learning to create vector Illustrations using Adobe Illustrator.</p>
          <p id="des-para4" class="des-para">I use Adobe Premiere Pro to play around with videos, create music videos, documentaries, advertisement videos and to play around with motion graphics. Adobe Premiere Pro is really useful for color corrections and color grading as well.</p>
        </div>
      </section>

      <div class="bg-image img4">
        <hr class="separator">
        <p class="image-header">GRAPHICS</p>
        <div class="transition">
        <a class="header-button" href="graphics.php">VIEW ALL</a>
        </div>
        <hr class="separator-bottom">
      </div> 

      <section id="commission">
        <h2>PREVIOUS COMMISSIONS</h2>
        <div id="company-showcase">
       	  <?php
            $data = new \Portfolio\Images('commissions', 'commission');
	    $data->displayData();
	  ?>
        </div>
      </section>

      <div id="contacts">
        <div class="bg-image img3">
	 <p id="copyright"></p>
<script type="text/javascript">
var d = new Date();
document.getElementById("copyright").innerHTML = "Copyright © " + d.getFullYear() + " Avishek Dangol | All rights reserved.";
</script>
          <hr class="separator">
          <p class="image-header">CONTACT ME</p>
          <hr class="separator-bottom">
          <div id="profiles">
            <div class="transition">
              <a class="profile-links" href="https://www.facebook.com/mvpstu" target="_blank">
                <i class="fa fa-facebook"></i>FACEBOOK
              </a>
            </div>
            <div class="transition">
              <a class="profile-links" href="https://www.instagram.com/avishekdangol" target="_blank">
                <i class="fa fa-instagram"></i>INSTAGRAM
              </a>
            </div>
            <div class="transition">
              <a class="profile-links" href="mailto:truworshiper7@gmail.com" target="_blank">
                <i class="fa fa-envelope"></i>EMAIL
              </a>
            </div>

          </div>
        </div>
      </div>

