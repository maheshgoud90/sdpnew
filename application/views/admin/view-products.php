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
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Products
                                <a href="<?php echo base_url();?>admin/add-product" class="btn btn-success pull-right">Add Product</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Chemical Name of the Product</th>
                                            <th>Product Code</th>
                                            <th>CAS Number</th>
                                            <th>Name of the API</th>
                                            <th>Structure</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Chemical Name of the Product</th>
                                            <th>Product Code</th>
                                            <th>CAS Number</th>
                                            <th>Name of the API</th>
                                            <th>Structure</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
                                            foreach($products as $product){
                                        ?>
                                        <tr id="career<?php echo $product->id;?>">
                                            <td ><?php echo $i;?></td>
                                            <td><?php echo $product->chemical_name; ?></td> 
                                            <td><?php echo $product->product_code; ?></td>
                                            <td><?php echo $product->cas_number; ?></td>
                                            <td><?php echo $product->api_name; ?></td>
                                            <td>
                                                
                                                <img src="<?php echo $product->structure; ?>">
                                            </td>
                                            <td><?php echo $product->status; ?></td>
                                            <td>

                                            <a href="javascript:void(0)" onclick="delete_product(<?php echo $product->id;?>)" class="btn btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='fa fa-trash'></i></a>
                                            <a href="<?php echo base_url();?>admin/edit-product/<?php echo $product->id; ?>"  class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class='fa fa-edit'></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                        $i++;
                                    } ?>
                                    </tbody>
                                </table>
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
