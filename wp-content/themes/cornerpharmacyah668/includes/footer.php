<!-- Start Footer -->
  <footer>
    <div class="footer_holder">
      <div class="wrapper animatedParent animateOnce">
        <div class="footer_holder_main">
          <div class="ft_box1">
            <div class="ft_info">
              <?php dynamic_sidebar('ft_info');?>
            </div>
            <div class="contact_info">
              <?php dynamic_sidebar('contact_info');?>
            </div>
          </div>
          <div class="ft_box2">
            <div class="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d272.5736824242617!2d-76.5345872102189!3d39.38297068300509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c808c6553959f7%3A0x7122942f7191856d!2s8713%20Harford%20Rd%2C%20Parkville%2C%20MD%2021234%2C%20USA!5e0!3m2!1sen!2sph!4v1637284207168!5m2!1sen!2sph"  allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="ft_animation animated zoomIn delay-250"> </div>
          </div>
          <div class="ft_box3">
            <div class="footer_nav">
              <h2>Site Navigation</h2>
              <?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
            </div>
            <div class="ft_serv">
            <?php dynamic_sidebar('ft_serv');?>
            </div>

            <div class="visitorCounter">
            <span>Visitor Counter:</span> <small><script src="<?php bloginfo('template_url')?>/counter.php?page=counter"></script></small>
            </div>

            <div class="copyright">
               <small><?php echo get_bloginfo('name');?></small>
              &copy; Copyright
             <?php
            $start_year = '2021';
            $current_year = date('Y');
            $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
            echo $copyright;
            ?>
            </div>

          </div>
        </div>
        <figure class="ft_design1">
          <img class="animated bounceIn delay-500" src="<?php bloginfo('template_url')?>/images/ft-design1.png" alt="round circle design">
        </figure>
        	<div class="clearfix"></div>
      </div>
      </div>
  </footer>

<span class="back_top"></span>

</div> <!-- End Clearfix -->
</div> <!-- End Protect Me -->

<?php get_includes('ie');?>

<!--
Solved HTML5 & CSS IE Issues
-->
<script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>

<!--
Solved Psuedo Elements IE Issues
-->

<script src="<?php bloginfo('template_url');?>/js/calcheight.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/css3-animate-it.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<!-- End Footer -->
