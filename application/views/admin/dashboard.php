<!DOCTYPE html>
<html lang="en">
    <!--  CSS Links Start -->
    <?php $this->load->view($css_links); ?>
    <!-- CSS Links End -->
    <body class="sb-nav-fixed">
        <!--  Header Start -->
        <?php $this->load->view($header); ?>
        <!-- Header End -->
        <div id="layoutSidenav">
                <!--  Side Menu Start -->
                <?php $this->load->view($sidemenu); ?>
                <!-- Side Menu End -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard 

                        <?php 
                        $name = $this->session->userdata('username');
                        echo $name;
                        ?>
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Careers</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url();?>admin/view-careers"><?php echo $careers->count; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Contacts</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url();?>admin/view-contacts">15</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </main>
                 <!--  Footer Start -->
                <?php $this->load->view($footer); ?>
                <!-- Footer End -->
            </div>
        </div>
         <!--  JS Links Start -->
         <?php $this->load->view($js_links); ?>
        <!-- JS Links End -->
    </body>
</html>
