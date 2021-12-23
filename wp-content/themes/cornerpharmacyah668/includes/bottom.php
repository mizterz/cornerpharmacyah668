<!-- Bottom -->
<div id="bottom1">
    <div class="wrapper animatedParent animateOnce">
        <div class="btm1_main">
          <div class="btm1_head">
            <?php dynamic_sidebar('btm1_info');?>
          </div>
          <div class="clearfix"> </div>
          <div class="btm1_serv">
            <div class="btm1_box1">
              <figure class="btm1_pic animated zoomIn">
                <img src="<?php bloginfo('template_url')?>/images/btm1-img1.jpg" alt="packaging concept">
              </figure>
              <div class="btm1_con animated fadeInUp delay-250">
                <?php dynamic_sidebar('btm1_box1');?>
                <a href="retail-pharmacy-services/unit-dose-packaging"><img src="<?php bloginfo('template_url')?>/images/btm1-arrow2.png" alt="arrow button"></a>
              </div>
            </div>
            <div class="btm1_box2">
              <figure class="btm1_pic animated zoomIn delay-250">
                <img src="<?php bloginfo('template_url')?>/images/btm1-img2.jpg" alt="customer consulting the male pharmacist">
              </figure>
              <div class="btm1_con animated fadeInUp delay-500">
                <?php dynamic_sidebar('btm1_box2');?>
                <a href="retail-pharmacy-services/patient-counseling"><img src="<?php bloginfo('template_url')?>/images/btm1-arrow2.png" alt="arrow button"></a>
              </div>
            </div>
            <div class="btm1_box3">
              <figure class="btm1_pic animated zoomIn delay-500">
                <img src="<?php bloginfo('template_url')?>/images/btm1-img3.jpg" alt="delivery concept">
              </figure>
              <div class="btm1_con animated fadeInUp delay-750">
                <?php dynamic_sidebar('btm1_box3');?>
                <a href="retail-pharmacy-services/bedside-medication-delivery"><img src="<?php bloginfo('template_url')?>/images/btm1-arrow2.png" alt="arrow button"></a>
              </div>
            </div>
            <div class="btm1_box4">
              <figure class="btm1_pic animated zoomIn delay-750">
                <img src="<?php bloginfo('template_url')?>/images/btm1-img4.jpg" alt="smiling pharmacist">
              </figure>
              <div class="btm1_con animated fadeInUp delay-1000">
                <?php dynamic_sidebar('btm1_box4');?>
                <a href="retail-pharmacy-services/nutritional-supplements"><img src="<?php bloginfo('template_url')?>/images/btm1-arrow2.png" alt="arrow button"></a>
              </div>
            </div>
          </div>
        </div>
        <figure class="btm1_design1">
          <img class="animated zoomIn" src="<?php bloginfo('template_url')?>/images/btm1-design1.png" alt="round circle design">
        </figure>
        	<div class="clearfix"></div>
    </div>
</div>

<div id="bottom2">
    <div class="wrapper animatedParent animateOnce">
        <div class="btm2_main animated zoomIn delay-250">
          <?php dynamic_sidebar('btm2_info');?>
        </div>
        <figure class="btm2_design1">
          <img class="animated bounceIn delay-500" src="<?php bloginfo('template_url')?>/images/btm2-design1.png" alt="round circle design">
        </figure>
        	<div class="clearfix"></div>
    </div>
</div>

<div id="bottom3">
    <div class="wrapper animatedParent animateOnce">
        <div class="btm3_main">
          <div class="btm3_box1 animated fadeInRight delay-500">
            <?php dynamic_sidebar('btm3_box1');?>
            <a href="retail-pharmacy-refill-prescription"><figure> <img src="<?php bloginfo('template_url')?>/images/btm3-arrow.png" alt="arrow button"> </figure>  </a>
          </div>
          <div class="btm3_box2 animated fadeInLeft delay-500">
            <?php dynamic_sidebar('btm3_box2');?>
            <a href="retail-pharmacy-insurance-accepted"><figure> <img src="<?php bloginfo('template_url')?>/images/btm3-arrow.png" alt="arrow button"> </figure>  </a>
          </div>
          <div class="btm3_box3 animated fadeInRight delay-750">
            <?php dynamic_sidebar('btm3_box3');?>
            <a href="retail-pharmacy-auto-rx-refills"><figure> <img src="<?php bloginfo('template_url')?>/images/btm3-arrow.png" alt="arrow button"> </figure>  </a>
          </div>
          <div class="btm3_box4 animated fadeInLeft delay-750">
            <?php dynamic_sidebar('btm3_box4');?>
            <a href="retail-pharmacy-transfer-prescription"><figure> <img src="<?php bloginfo('template_url')?>/images/btm3-arrow.png" alt="arrow button"> </figure>  </a>
          </div>
        </div>

        <figure class="btm3_img1 animated fadeInUp delay-250">
          <img src="<?php bloginfo('template_url')?>/images/btm3-img1.png" alt="smiling female pharmacist">
        </figure>
        	<div class="clearfix"></div>
    </div>
</div>

<div id="bottom4">
    <div class="wrapper animatedParent animateOnce">
        <div class="btm4_main">
            <div class="btm4_head">
              <?php dynamic_sidebar('btm4_info');?>
            </div>
            <?php
            $prompt_message = '<span class="newsletter" style="color: #FFF;font-size:13px;">Please fill the following:</span>';
            if(isset($_POST['btm4_submit'])){
            @session_start();
            if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address']))))
            { $prompt_message = '<div id="error" style="color: #FFF;font-size:13px;">Please enter a valid email address</div>';}
            else {
            $_SESSION['Full_Name'] = (isset($_POST['Full_Name'])) ? $_POST['Full_Name'] : '';
            $_SESSION['Email_Address'] = (isset($_POST['Email_Address'])) ? $_POST['Email_Address'] : '';
            $_SESSION['Question_or_Comment'] = (isset($_POST['Question_or_Comment'])) ? $_POST['Question_or_Comment'] : '';
            echo "<script type='text/javascript'>window.location='".get_home_url()."?p=12#myframe';</script>";
            }}
            ?>
            <form class="btm4_form" action="#" method="post">
              <input class="btm4_name" type="text" name="Full_Name" placeholder="*Full Name" required>
              <input class="btm4_email" type="email" name="Email_Address" placeholder="*Email Address" required>
              <textarea class="btm4_msg" name="Question_or_Comment" placeholder="Message(s)"></textarea>
              <input class="btm4_submit" type="submit" name="btm4_submit" value="Submit">
            </form>
        </div>
        <figure class="btm4_design1 ">
          <img class="animated bounceIn delay-250" src="<?php bloginfo('template_url')?>/images/btm4-design1.png" alt="round circle design">
        </figure>
        	<div class="clearfix"></div>
    </div>
</div>
<!-- End Bottom -->
