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
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Product
                                
                            </div>
                            <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>admin/edit-product/<?php echo $product->id;?>">
                                <div class="form-group">
                                    <label for="chemical_name">Chemical Name of the Product</label>
                                    <input type="text" class="form-control" id="chemical_name" name="chemical_name" value="<?php echo $product->chemical_name;?>">
                                    <small  class="form-text text-muted"><?php echo form_error('chemical_name'); ?></small> 
                                </div>
                                <div class="form-group">
                                    <label for="product_code">Product Code</label>
                                    <input type="text" class="form-control" id="product_code" name="product_code" value="<?php echo $product->product_code;?>">
                                    <small  class="form-text text-muted"><?php echo form_error('product_code'); ?></small> 
                                </div>
                                <div class="form-group">
                                    <label for="cas_number">CAS Number</label>
                                    <input type="text" class="form-control" id="cas_number" name="cas_number" value="<?php echo $product->cas_number;?>">
                                    <small  class="form-text text-muted"><?php echo form_error('cas_number'); ?></small> 
                                </div>
                                <div class="form-group">
                                    <label for="api_name">Name of the API</label>
                                    <input type="text" class="form-control" id="api_name" name="api_name"  value="<?php echo $product->api_name;?>">
                                    <small  class="form-text text-muted"><?php echo form_error('api_name'); ?></small> 
                                </div>
                                <div class="form-group">
                                    <label for="structure">Structure</label>
                                    <input type="file" class="form-control" id="structure" name="structure">
                                    <input type="hidden"  value="<?php echo $product->structure;?>" name="structure_edit">
                                    <!-- <small  class="form-text text-muted"><?php //echo form_error('structure'); ?></small>  -->
                                </div>
                               <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
