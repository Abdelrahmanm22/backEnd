    <?php require_once("header.php") ?>

      <!--profile code-->
        <div class="profile mt-5 " id="home">
            <img src="image/decor-wave-line-1.png" alt="wave">
            <div class="container">
                <div class="row">
                    <div class="profile-text wow fadeInLeftBig col-lg-6 col-sm-12" data-wow-duration="2s">
                        <h3>Hi, I'm <?=$data['name']?></h3>
                        <h2><?=$data['job_title']?> Developer</h2>
                        <p><?=$data['description']?> </p>
                        <button class=" btn btn-danger"><a href="#">
                            Contact Me
                        </a></button>
                    </div>
                    <div class="profile-img col-lg-6 col-sm-12">
                        <div>
                            <img src="<?=PATH."img/".$data["img"]?>" alt="profile-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- skills code -->
        <div class="skills mt-5" id="Services">
            <img src="image/decor-circle-tri-1.png" alt="circle-tri">
            <div class="container">
                <div class="row">
                    <div class="skillsItem col-lg-4 col-sm-12">
                        <h2>Services</h2>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-offset="250">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                    </div>
                    <div class="skillsItem wow fadeInUp col-lg-4 col-sm-12" data-wow-duration="1s" data-wow-offset="250">
                      <i class="iconSkills fab fa-searchengin"></i>
                      <h3>Research</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                      <p>See Details
                        <i class="fas fa-arrow-right"></i>
                      </p>
                    </div>
                    <div class="skillsItem wow fadeInUp col-lg-4 col-sm-12" data-wow-duration="1s" data-wow-offset="250">
                      <i class="iconSkills fas fa-pencil-ruler"></i>
                      <h3>Branding</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                      <p>See Details
                        <i class="fas fa-arrow-right"></i>
                      </p>
                    </div>
                    <div class="skillsItem col-lg-4 col-sm-12"></div>
                    <div class="skillsItem wow fadeInUp col-lg-4 col-sm-12" data-wow-duration="1s" data-wow-offset="250">
                      <i class="iconSkills far fa-object-ungroup"></i>
                      <h3>UI / UX Design</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                      <p>See Details
                        <i class="fas fa-arrow-right"></i>
                      </p>
                    </div>
                    <div class="skillsItem wow fadeInUp col-lg-4 col-sm-12" data-wow-duration="1s" data-wow-offset="250">
                      <i class="iconSkills fas fa-code"></i>
                      <h3>App Development</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                      <p>See Details
                        <i class="fas fa-arrow-right" data-wow-duration="1s" data-wow-offset="250"></i>
                      </p>
                    </div>
                </div>
            </div>
        </div>
      <!-- works code -->
        <div class="works mt-5" id="Works">
          <div class="head" >
            <h2>SELECTED WORKS
            </h2>
            <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="270" >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus.		</p>
              
          </div>
          <div class="container">
            <div class="row wow fadeInRightBig" data-wow-duration="1.5s">
              <div class="worksItem col-lg-6 col-sm-12 ">
                <h3>eCommerce Family Bakery Site</h3>
                <p>
                  Mauris id blandit quam. Proin commodo facilisis erat eget cursus.&nbsp;Mauris id blandit quam. Proin commodo facilisis erat eget cursus
                </p>
                <a href="#">
                  <p class="see">
                    See Detail <i class="fas fa-arrow-right"></i>
                  </p>
                </a>
              </div>
              <div class="worksItem col-lg-6 col-sm-12 ">
                <div class="imgWorks">
                  <a href="https://abdelrahmanm22.github.io/bakery/"><img src="<?=PATH;?>front/image/Bakery.jpg" alt="Bakery"></a>
                  
                </div>
              </div>
              
            </div>
            <div class="row wow fadeInLeftBig" data-wow-duration="1.5s">
              <div class="worksItem col-lg-6 col-sm-12 ">
                <div class="imgWorks">
                  <a href="https://abdelrahmanm22.github.io/resturant/"><img src="<?=PATH;?>front/image/resturant.jpg" alt="resturant"></a>
                  
                </div>
                
              </div>
              <div class="worksItem col-lg-6 col-sm-12 ">
                <h3>
                  Design for Cognitive Website Resturant
                </h3>
                <p>Mauris id blandit quam. Proin commodo facilisis erat eget cursus. Mauris id blandit quam. Proin commodo facilisis erat eget cursus.</p>
                <a href="#">
                  <p class="see">
                    See Detail <i class="fas fa-arrow-right"></i>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>

      <!--reco code  -->
        <hr>
        <div class="reco mt-5" id="reco">
          <div class="head">
            <h2>TESTIMONIALS
            </h2>
            <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="270" >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus.		</p>
              
          </div>
          <div class="container">
            <div class="row">
              <div class="reco-item col-lg-3 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-offset="280" data-wow-delay="0.5s">
                <i class="fas fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Dolor Sit amiet mattis luctus.</p>
                <img src="<?=PATH;?>front/image/testimonial1.jpg" alt="testimonial1">
                <h4>Mohamed Amr</h4>
                <p>Founder of Itrax Academy</p>
              </div>
              <div class="reco-item col-lg-3 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-offset="280" data-wow-delay="0.8s">
                <i class="fas fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Dolor Sit amiet mattis luctus.</p>
                <img src="<?=PATH;?>front/image/testimonial2.png" alt="testimonial2">
                <h4>Jenny Laura</h4>
                <p>CEO FEMALE INC</p>
              </div>
              <div class="reco-item col-lg-3 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-offset="280" data-wow-delay="1s">
                <i class="fas fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Dolor Sit amiet mattis luctus.</p>
                <img src="<?=PATH;?>front/image/testimonial3.png" alt="testimonial3">
                <h4>Hanna Lee</h4>
                <p>CEO COFFEE STORY</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- contact code -->
        <div class="contact mt-5" id="contact">


          <div class="container">
            <div class="row">
              <div class="contactDetails">
                <h4>Get In Touch With Me</h4>
                <p>Victoria Street No 1, London</p>
                <p><?= $data['email']; ?></p>
                <p><?= $data['phone']; ?></p>
                <div class="contactIcons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-linkedin"></i>
                  <i class="fab fa-dribbble"></i>
                </div>
                <p>Copyright ©2020 Webdev</p>
              </div>
            </div>
          </div>
          <img src="<?=PATH;?>front/image/decor-combine.png" alt="decor-combine">
        </div>



        

        <script src="<?=PATH;?>front/js/wow.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="<?=PATH;?>front/js/jquery-3.6.0.js"></script>
        <script src="<?=PATH;?>front/js/bootstrap.bundle.js"></script>
        <script src="<?=PATH;?>front/js/java.js"></script>
    </body>
</html>