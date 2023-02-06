<!-- 

Template Name: Home

-->

<?php get_header(); ?>

<section id="hero">
    <div class="container_spec content">
        <div class="hero_description ">
            <h2>Friendly App</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc <br> odio in et, lectus sit lorem id integer.</p>
            <button class="btn btn_started"><a href="#">Get Started</a></button>
        </div>
        <div class="hero_background">
        <img src="<?php echo get_template_directory_uri(); ?> ./src/img/ill.png">
        </div>
    </div>
</section>

<section id="business_goals">
    <div class="container_spec">
        <div class="business_content">
            <div class="content_title">
                <h3>Our approach to reach your business goals</h3>
            </div>
            <div class="business_steps">
                <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?> ./src/img/step1.svg">
                    <h4>Ideate</h4>
                    <p>Turn your idea from concept to MVP</p>
                </div>
                <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?> ./src/img/step2.svg">
                    <h4>Design</h4>
                    <p>Sketch out the product to align the user needs</p>
                </div>
                <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?> ./src/img/step3.svg">
                    <h4>Develop</h4>
                    <p>Convert the designs into a live application</p>
                </div>
                <div class="step">
                    <img src="<?php echo get_template_directory_uri(); ?> ./src/img/step4.svg">
                    <h4>Deploy</h4>
                    <p>Launching the application to the market</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="app_screens">
    <div class="container_spec">
        <div class="all_screens_content">
            <div class="content_title">
                <h3>All app screens</h3>
            </div>
            <div class="slider">
                <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block mx-auto" alt="First slide" src="<?php echo get_template_directory_uri(); ?> ./src/img/Mobile_Mockups.svg">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
    <img class="d-block mx-auto " alt="Second slide" src="<?php echo get_template_directory_uri(); ?> ./src/img/Mobile_Mockups.svg">
    
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
    <img class="d-block mx-auto" alt="Third slide" src="<?php echo get_template_directory_uri(); ?> ./src/img/Mobile_Mockups.svg">
    
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="" aria-hidden="true"> <img src="<?php echo get_template_directory_uri(); ?> ./src/img/Left_Arrow.svg"> </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="" aria-hidden="true"> <img src="<?php echo get_template_directory_uri(); ?> ./src/img/Right_Arrow.svg"> </span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
            </div>

        </div>
    </div>
</section>

<section id="contact_form">
    <div class="container_spec content">
        
            <div class="form_background ">
                <img src="<?php echo get_template_directory_uri(); ?> ./src/img/Creative.svg">    
            </div>
            <div class="form_description">
                <h3>Contact Form</h3>
                <?php echo apply_shortcodes ('[contact-form-7 id="32" title="Contact Form"]'); ?>
            </div>
        
    </div>
</section>


<?php get_footer(); ?>

