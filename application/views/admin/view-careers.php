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
                        <h1 class="mt-4">Careers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Careers</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Careers
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Functinal Area</th>
                                            <th>Total Experience</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Resume</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Functinal Area</th>
                                            <th>Total Experience</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Resume</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
                                            foreach($careers as $career){
                                        ?>
                                        <tr id="career<?php echo $career->id;?>">
                                            <td ><?php echo $i;?></td>
                                            <td><?php echo $career->departments; ?></td> 
                                            <td><?php echo $career->total_experience; ?></td>
                                            <td><?php echo $career->name; ?></td>
                                            <td><?php echo $career->email; ?></td>
                                            <td><?php echo $career->mobile; ?></td>
                                            <td>
                                                
                                                <a href="<?php echo base_url(); ?><?php echo $career->resume; ?>" > Download </a>
                                            </td>
                                            <td>

                                            <a href="javascript:void(0)" onclick="delete_career(<?php echo $career->id;?>)" class="btn btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='fa fa-trash'></i></a>
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
    <script>
function delete_career(id)
 {
  if (confirm("you are about to delete a record. This cannot be undone. are you sure?")) {
     var id = id;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/delete-career/"+id,
            type: 'get',
            success: function () {
                $('#career'+id).hide();
                return false;
            },
            error: function () {
                alert('ajax failure');
                return false;
            }
        });
    } else {
        alert(id + " not deleted");
    }
}
</script> 
</html>
