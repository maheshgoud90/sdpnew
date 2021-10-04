<!DOCTYPE html>
<html lang="en">

<head>
    <!--  CSS Links Start -->
    <?php $this->load->view($css_links); ?>
    <!-- CSS Links End -->
</head>


<body>

    <!--page start-->
    <div class="page">
       

       <!-- preloader start -->
        <!-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> -->
        <!-- preloader end -->       

     
        <!--header start-->
            <?php $this->load->view($menu); ?>
    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Header -->

    	<header class="header pos-re slider-fade" data-scroll-index="0">

    		<div class="owl-carousel owl-theme">
                <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo base_url();?>assets/frontend/images/slides/slide1.jpg">
        			<div class="text-center v-middle caption mt-30">
                        <!-- <h4>We Are</h4> -->
                        <h1>Satyadeva Pharmaceuticals <br><span style="color: rgb(210, 220, 236);">Pvt Ltd</span></h1>
                        <div class="row">
                            <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                                <p >We believe that the process is more important than the outcome.</p>
                            </div>
                        </div>
                        <!-- <a href="#0" class="butn butn-light mt-30">
                            <span>Get Started</span>
                        </a> -->
                    </div>
                </div>
                <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo base_url();?>assets/frontend/images/slides/slide2.jpg">
                    <div class="text-center v-middle caption mt-30">
                        <!-- <h4>About us</h4> -->
                        <h1>Satyadeva Pharmaceuticals  <br><span style="color: rgb(210, 220, 236);">Pvt Ltd</span></h1>
                        <div class="row">
                            <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                                <!-- <p>We pride ourselves on being known by our customers for our quality and as a highly reliable and reputed partner.</p> -->
                            </div>
                        </div>
                        <!-- <a href="#0" class="butn butn-light mt-30">
                            <span>Get Started</span>
                        </a> -->
                    </div>
                </div>
                <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo base_url();?>assets/frontend/images/slides/slide1.jpg">
                    <div class="text-center v-middle caption mt-30">
                        <!-- <h4>We Are</h4> -->
                        <h1>Satyadeva Pharmaceuticals  <br><span style="color: rgb(210, 220, 236);">Pvt Ltd</span></h1>
                        <div class="row">
                            <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                                <!-- <p>The company has grown consistently to become one of the leading manufacturers of intermediates / Active Pharmaceutical Ingredients(APIs)for anti-retrovirals(ARV).</p> -->
                            </div>
                        </div>
                        <!-- <a href="#0" class="butn butn-light mt-30">
                            <span>Get Started</span>
                        </a> -->
                    </div>
                </div>
    		</div>
    	</header>




        <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">
    <section style="background-color: rgb(173, 193, 200); background-image: url(<?php echo base_url();?>assets/frontend/images/backgrounds/home_page_background.jpg);" class="ttm-row introduction-section clearfix">
            <div class="container">
                             <div  class="section-title"  style="font-family: Roboto,sans-serif;">
                                <div class="title-header" style="padding-left: 15px;font-family: Roboto,sans-serif;">
                                     <h1 style=" color: rgb(40, 75, 134);font-family: Roboto,sans-serif;" class="title" ><u>Satyadeva Pharmaceuticals:</u></h1>
                                </div>
                                <div style="padding-left: 15px;padding-right: 15px;font-family: Roboto,sans-serif; font-size:13px; text-align:justify;">
                                <div><h4><b style=" font-size:22px;text-align:justify;"> Satyadeva is an US FDA approved and ISO 9001:2015 Certified Company.</b></h4></div>
                               <br>
                                <div> <h4><b  style=" font-size:22px;text-align:justify;">We have ever appreciating international and domestic customer
                                    base, in pursuance of its our focus towards Quality.</b></h4></div>
                                    <br>
                                <div><h4><b  style=" font-size:22px;text-align:justify;"> Our Policy is to enhance
                                    customer satisfaction by providing Quality API ‘S at optimum cost and
                                    maintain 
                                     profitability through continual improvement of Quality
                                    Management Systems and cGMP.</b></h4></div>
                                </div>
                            </div> 
            </div>
        </section>


    <!-- <section style="background-color: rgb(173, 193, 200); background-image: url(<?php echo base_url();?>assets/frontend/images/backgrounds/home_page_background.jpg);" class="ttm-row introduction-section clearfix">
            <div class="container">
                             <div  class="section-title"  style="font-family: Roboto,sans-serif; text-align:justify !important">
                                <div class="title-header" style="font-family: Roboto,sans-serif;">
                                     <h1 style=" color: rgb(40, 75, 134);font-family: Roboto,sans-serif;" class="title" ><u><b>Satyadeva Pharmaceuticals:</b></u></h1>
                                </div>
                                <div style="font-family: Roboto,sans-serif; font-size:13px; ">
                                <div><h4><b style=" font-size:22px; padding-left:20px; padding-right:10px; text-align:justify;" >Satyadeva is an US FDA approved and ISO 90001:2015 Certified Company.</b></h4></div>
                               <br>
                                <div> <h4><b  style=" font-size:22px; padding-left:20px; padding-right:10px; text-align:justify;"> We have ever appreciating international and domestic customer
                                    base, in pursuance of its focus towards Quality.</b></h4></div>
                                    <br>
                                <div><h4><b  style=" font-size:22px; padding-left:20px; padding-right:10px; text-align:justify;"> Our Policy to enhance
                                    customer satisfaction by providing Quality API ‘S at optimum cost and
                                    maintain 
                                     profitability through continual improvement of Quality
                                    Management Systems and cGMP.</b></h4></div>
                                </div>
                            </div> 
            </div>
        </section> -->
    </div><!--site-main end-->


    <!--footer start-->
    <?php $this->load->view($footer); ?>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

         <?php $this->load->view($js_links); ?>

    <!-- Javascript end-->

</body>


</html>