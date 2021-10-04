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
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->       

       
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- top_bar -->
            <!-- top_bar end-->
            <!-- site-header-menu -->
            <div  id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--site-navigation -->
                                <!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!--header end-->


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
            <?php $this->load->view($menu); ?>  


                <div class="container">
                    
                    <div class="row align-items-center">
                        
                        
                        <div class="col-lg-12">
                            
                            <div class="page-title-heading">
                                
                                <h2 class="title" style="  color: rgb(40, 75, 134);">ENVIRONMENT & SAFETY STANDARDS</h2>
                            </div>
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>About Us 2</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->

        <!-- page-title -->
       


    <!--site-main start-->
    <div class="site-main">

        <!--introduction-section-->
       
        <!--introduction-section end-->

                <!--services-section-->
                <section class="ttm-row services-section-2 bg-layer-equal-height ttm-bgcolor-grey bg-img5 ttm-bg ttm-bgimage-yes clearfix" style="padding: 20px">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                                <!-- section-title -->
                                <div class="section-title with-sep title-style-center_text">
                                    <div class="title-header">
                                        <!-- <h5>Environment & Safety Standards</h5> -->
                                        <!-- <h2 class="title">Environment & Safety Standards</h2> -->
                                    </div>
                                </div><!-- section-title end -->
                            </div>
                        </div><!-- row end -->
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6">
                                <div class="ttm-bgcolor-white pl-50 pt-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30 res-991-pb-40">
                                    <h5  style="color: rgb(40, 75, 134); font: size 20px;"><B>ENVIRONMENT & SAFETY STANDARDS</B></h5>
                                    <!-- ttm-progress-bar -->
                                    <div class="ttm-progress-bar">
                                        <div class="progressbar-title"  style="text-align: justify; line: height 1.5em;"><p >
                                            Environment protection is integrated from product development stage
                                            itself with environment pollution potential being one of the guiding
                                            parameters in developing the route of synthesis and also choosing the
                                            raw materials.<br>We made significant investment in the installation and maintenance of
                                            advanced safety equipment and state of the art fire protection
                                            systems,to minimize the impact of its activities on the environment, we
                                            have fully equipped Zero Liquid Discharge plants at our facility.<br>
                                            We ensure that every employee is properly trained for the safe handling of APIs,Intermediates, KSMs and all related equipment.Trainings are reviewed and updated regularly.
                                           <br>We comply with all Safety, Health & Environment related statuatory and regulatory requirements.
                                        </p>
                                          
                                        </div>
                                    </div><!-- ttm-progress-bar end -->
                                    <!-- <div class="ttm-progress-bar">
                                        <div class="progressbar-title"><p>We have detailed guidelines for the safe handling of APIs, intermediates
                                            and KSMs, which are periodically reviewed and updated We hold
                                            employee training sessions on safe handling of APIs and other chemical
                                            hazards, and we make sure employees are up to date on regulations.</p></div>
                                    </div> -->
                                    <!-- ttm-progress-bar end -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="ttm-bgcolor-white">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- ttm_single_image-wrapper -->
                                            <!-- <div class="ttm_single_image-wrapper mt-50 mb_50 mr_150 res-991-mr-15 res-991-mt-0 z-index-2 position-relative">
                                                <img class="img-fluid" src="<?php echo base_url();?>assets/frontend/img-1/st1.jpg" alt="">
                                            </div> -->
                                            <div class="ttm_single_image-wrapper mt-50 mb_50 mr_150 res-991-mr-15 res-991-mt-0 z-index-2 position-relative">
                                                <img style="height: 500px; width: 800px;" class="img-fluid" src="<?php echo base_url();?>assets/frontend/images/st1.jpeg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor pt-50 pr-50 mb-50 ml_150">
                                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                                <div class="layer-content">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


               
                <!--services-section end-->
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