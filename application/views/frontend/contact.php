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
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
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
        </header>
        <!--header end-->


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
            <?php $this->load->view($menu); ?> 
            
            
                <div class="container">

                    <div class="row align-items-center">


                        <div class="col-lg-12">

                            <div class="page-title-heading">

                                <h2 class="title" style="  color: rgb(40, 75, 134);">CONTACT US</h2>
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
           
            <section class="ttm-row pt-0 pb-50 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-white-1 z-index-2 spacing-10 ">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <!-- <div id="success-notification" style="display:none">
                                            <div class="alert alert-success alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                               <b> Your Details Successfully Completed. Our Team will contact you soon</b>
                                            </div>
                                        </div>
                                        <h5>GET IN TOUCH</h5> -->
                                        <h2 class="title" style="color: rgb(40, 75, 134);">Satyadeva Pharmaceuticals Pvt Ltd
                                            </h2>
                                    <!-- </div> -->
                                </div><!-- section title end -->
                                <form id="contact-form" class="ttm-contactform-2 wrap-form clearfix"  method="post" enctype='multipart/form-data' >
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text"
                                                        placeholder="Your Name" value="<?php echo set_value('name'); ?>"></span>
                                            </label>
                                            <span id="name_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="email" type="email"
                                                        placeholder="Your Email" value="<?php echo set_value('email'); ?>"></span>
                                            </label>
                                            <span id="email_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text"
                                                        placeholder="Phone Number" value="<?php echo set_value('phone'); ?>"></span>
                                            </label>
                                            <span id="phone_error" class="text-danger"></span>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text"
                                                        placeholder="Total Experience" value=""></span>
                                            </label>
                                        </div> -->
                                    </div>
                                    <label>
                                        <span class="text-input"><textarea name="message" rows="3" placeholder="Message"
                                                value="<?php echo set_value('message'); ?>"></textarea></span>
                                    </label>
                                    <span id="message_error" class="text-danger"></span>
                                    <button
                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor"
                                        type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- testimonial-box -->
                            <div class="pt-45 res-991-pt-0 res-991-pb-30">
                                <div class="mb-30">
                                    <!-- <h4>Our Office Inforamtion</h4> -->
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <!-- <h5>Location</h5> -->
                                        </div>
                                        <div class="featured-desc">
                                            <p>
                                            <h4> Corporate Office</h4>
                                            8
                                            3 989/35, Nagarjuna Nagar Colony,
                                            Yellareddyguda,
                                            Srinagar Colony Post,
                                            Hyderabad, Telangana, India.</p>

                                        </div>
                                        
                                    </div>
                                </div>
                                <br>
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <!-- <div class="featured-title">
                                        <h5>Call Us</h5>
                                    </div> -->
                                        <div class="featured-desc">

                                            <p>
                                            <h4>Manufacturing Facility</h4>Plot No:19 to 28, Phase
                                            II, IDA,
                                            Pashamylaram, Patancheru Mandal,
                                            Sangareddy
                                            Dist , Telangana, India.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon-call"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Call Us</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Corporate Office<br><a href="tel:04023740698">04023740698</a></p>
                                            <p>Manufacturing Facility<br><a href="tel:9705488811">9705488811</a></p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Email</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <a href="mailto:info@satyadevapharma.com">info@satyadevapharma.com</a><br>
                                            <a href="mailto:tsr@satyadevapharma.com">tsr@satyadevapharma.com</a>
                                            
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>

                    </div><!-- row end -->
                </div>
            </section>


            <!--google_map-->
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.1915710899193!2d78.21976241470553!3d17.54606358798382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbf236efe59eef%3A0x8c95bab6a46c10a7!2sPhase%202%20Rd%2C%20Muthangi%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1626253788189!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   </div>
            </div>


        </div>
        <!--site-main end-->


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
            $('#contact-form').on('submit', function(event){
                event.preventDefault();
                console.log($(this).serialize());
                $.ajax({
                    url:"<?php echo base_url(); ?>mainpage/validate_contact",
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    async: false,
                    timeout: 1000,
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
                            if(data.phone_error != '')
                            {
                            $('#phone_error').html(data.phone_error);
                            }
                            else
                            {
                            $('#phone_error').html('');
                            }
                            if(data.message_error != '')
                            {
                            $('#message_error').html(data.message_error);
                            }
                            else
                            {
                            $('#message_error').html('');
                            }
                        }
                        if(data.success)
                        {
                            $('#success_message').html(data.success);
                            $('#name_error').html('');
                            $('#email_error').html('');
                            $('#message_error').html('');
                            $('#phone_error').html('');
                            $('#contact-form')[0].reset();
                           $('#success-notification').show();
                        }
                    }
                })
            });
        });
    </script>
   
</body>


</html>