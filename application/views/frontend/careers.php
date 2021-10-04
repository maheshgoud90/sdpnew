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
                                
                                <h2 class="title" style="color: rgb(40, 75, 134);">CAREERS</h2>
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
        
         <section class="ttm-row cta-info-section ttm-bgcolor-grey bg-layer bg-layer-equal-height clearfix" style="padding-left: 400px;">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-8">
                         <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey z-index-1" >
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer" ></div>
                            <div class="layer-content">
                                <!-- testimonial-box -->
                                <div class="pt-45 pl-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30">
                                <!-- section-title -->
                                    
                                    <div class="section-title with-desc text-center clearfix">
                                        <div id="success-notification" style="display:none">
                                            <div class="alert alert-success alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                               <b> Your Details Successfully Completed. Our Team will contact you soon</b>
                                            </div>
                                        </div>
                                            <h2 class="title" style="color: rgb(40, 75, 134);">APPLY HERE</h2>
                                        </div>
                                    </div>
                                    <!-- <h3>Keep in touch!</h3> -->
                                    <form id="career-form" class="ttm-contactform-2 wrap-form clearfix" method="post" enctype='multipart/form-data'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                  
                                                    <h6>Functinal Area Applied For*</h6>
                                                    <select name="departments" class="wpcf7-form-control wpcf7-select">
                                                        <!-- <option value="">-- Functinal Area Applied For --</option> -->
                                                        <option value="">-- select --</option>
                                                        <option  value="Production" <?php echo (set_value('departments')=='Production')?" selected=' selected'":""?> style="background-color:rgb(40, 75, 134);color:white;" >Production</option>
                                                        <option value="R & D" <?php echo (set_value('departments')=='R & D')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">R&amp;D</option>
                                                        <option value="Quality Assurance" <?php echo (set_value('departments')=='Quality Assurance')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Quality Assurance</option>
                                                        <option value="Quality Control" <?php echo (set_value('departments')=='Quality Control')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Quality Control</option>
                                                        <option value="Engineering & Maintenance" <?php echo (set_value('departments')=='Engineering & Maintenance')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Engineering &amp; Maintenance</option>
                                                        <option value="Stores" <?php echo (set_value('departments')=='Stores')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Stores</option>
                                                        <option value="HR" <?php echo (set_value('departments')=='HR')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">HR & Administration</option>
                                                        <option value="Finance" <?php echo (set_value('departments')=='Finance')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Finance</option>
                                                        <option value="Others" <?php echo (set_value('departments')=='Others')?" selected=' selected'":""?>style="background-color:rgb(40, 75, 134);color:white;">Others</option></select>
                                                </label>
                                                <span id="departments_error" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <h6>Total Experience*</h6>
                                                    <span class="text-input"><input name="total_experience" type="text" placeholder="" value="<?php echo set_value('total_experience'); ?>"></span>
                                                </label>
                                                <span id="total_experience_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <h6>Your Full name*</h6>
                                                    <span class="text-input"><input name="name" type="text"  placeholder="" value="<?php echo set_value('name'); ?>"></span>
                                                </label>
                                                <span id="name_error" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <h6>Your Email*</h6>
                                                    <span class="text-input"><input name="email" type="text"  placeholder="" value="<?php echo set_value('email'); ?>"></span>
                                                </label>
                                                <span id="email_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <h6>Your Mobile Number*</h6>
                                                    <span class="text-input"><input name="mobile" type="text"  placeholder="" value="<?php echo set_value('mobile'); ?>"></span>
                                                </label>
                                                <span id="mobile_error" class="text-danger"></span>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                            
                                            <label>
                                               <h6>Upload your Resume*</h6>
                                                <span class="file"><input name="resume" id="resume" type="file"  placeholder=""></span>
                                            </label>
                                           <span id="resume_error" class="text-danger"></span>
                                        </div>
                                    </div><br>
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Submit</button>
                                    </form>
                                    <br>
                                </div>
                            </div>
        
        
                            <!-- row end-->
                        </div>
                    </div>
                </div>
                 <!--site-main start-->
            </div>
        </section>

        
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
    <script>
        $(document).ready(function(){
            $('#career-form').on('submit', function(event){
                event.preventDefault();
                var formData = new FormData(this);
                
                $.ajax({
                    url:"<?php echo base_url(); ?>mainpage/validate_careers",
                    method:"POST",
                    data: formData,
                    dataType:"json",
                    async: false,
                    timeout: 1000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(data)
                    {
                        console.log(data);
                        if(data.error){
                            if(data.name_error != '')
                            {
                            $('#name_error').html(data.name_error);
                            }
                            else
                            {
                            $('#name_error').html('');
                            }
                            if(data.email_error != '')
                            {
                            $('#email_error').html(data.email_error);
                            }
                            else
                            {
                            $('#email_error').html('');
                            }
                            if(data.mobile_error != '')
                            {
                            $('#mobile_error').html(data.mobile_error);
                            }
                            else
                            {
                            $('#mobile_error').html('');
                            }
                            if(data.departments_error != '')
                            {
                            $('#departments_error').html(data.departments_error);
                            }
                            else
                            {
                            $('#departments_error').html('');
                            }
                            if(data.total_experience_error != '')
                            {
                            $('#total_experience_error').html(data.total_experience_error);
                            }
                            else
                            {
                            $('#total_experience_error').html('');
                            }
                            if(data.resume_error != '')
                            {
                            $('#resume_error').html(data.resume_error);
                            }
                            else
                            {
                            $('#resume_error').html('');
                            }
                        }
                        if(data.success)
                        {
                            $('#success_message').html(data.success);
                            $('#name_error').html('');
                            $('#email_error').html('');
                            $('#departments_error').html('');
                            $('#mobile_error').html('');
                            $('#resume_error').html('');
                            $('#total_experience_error').html('');
                            $('#career-form')[0].reset();
                            $('#success-notification').show();
                        }
                    }
                })
            });
        });
    </script>


</body>


</html>