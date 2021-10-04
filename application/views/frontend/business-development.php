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
                                
                                <h2 class="title" style="  color: rgb(40, 75, 134);">BUSINESS DEVELOPMENT</h2>
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
                                        <!-- <h5>Business Development</h5> -->
                                        <!-- <h2 class="title">Business Development</h2> -->
                                    </div>
                                </div><!-- section-title end -->
                            </div>
                        </div><!-- row end -->
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6">
                                <div class="ttm-bgcolor-white pl-50 pt-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30 res-991-pb-40">
                                <h3 class="title" style="color: rgb(40, 75, 134);"><B>BUSINESS DEVELOPMENT</B></h3>
                                    <!-- ttm-progress-bar -->
                                    <div class="ttm-progress-bar">
                                        <div class="progressbar-title" style="text-align: justify; line: height 1.5em;"><p >We can export the pharma products KEY STARTING MATERIALS FOR
                                            API's, API INTERMEDIATES.
                                        <br>
                                        We are interested in having our Products registered in various
                                            countries. We require agency representations from different countries in the
                                            world.<br>We are also interested in manufacturing and exporting the Drug API
                                            Intermediates as per the customers’ requirements in addition to our
                                            existing ranger products of Retro virals. Interested parties can contact our marketing team.
                                    </p>
                                           
                                        </div>
                                    </div><!-- ttm-progress-bar end -->
                                    <!-- <div class="ttm-progress-bar">
                                        <div class="progressbar-title"><p>Interested parties can contact our marketing team.</p></div>
                                    </div> -->
                                    <!-- ttm-progress-bar end -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="ttm-bgcolor-white">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- ttm_single_image-wrapper -->
                                            <div class="ttm_single_image-wrapper mt-50 mb_50 mr_150 res-991-mr-15 res-991-mt-0 z-index-2 position-relative">
                                                <img class="img-fluid" src="<?php echo base_url();?>assets/frontend/images/business-1.jpeg" alt="">
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