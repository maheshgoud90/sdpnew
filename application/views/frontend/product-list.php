<!DOCTYPE html>
<html lang="en">


<head>
     <!--  CSS Links Start -->
     <?php $this->load->view($css_links); ?>
    <!-- CSS Links End -->
<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
     
    th, td {
        padding: 20px;
    }
</style>

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
                                
                                <h2 class="title" style="margin-top:100px">PRODUCT LIST</h2>
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
       

    </div>
<br>
    <!--site-main start-->
    <div style="background-color: rgb(211, 208, 228);"  class="page">

        <!--introduction-section-->
       
        <!--introduction-section end-->

        <!--introduction-section-->
             <br>
                <!-- <h2 style="text-align: center;color:rgb(10, 8, 8);">SATYADEVA PHARMACEUTICALS PVT LTD</h2> -->
                    <div style="color: white;"></div>
                    <br>
                <h4  style="text-align: center;color:  rgb(40, 75, 134);"><u>List of Manufacturing Products</u></h4>
             
                <table  style="color: black;">
                    <tr style="color: rgb(40, 75, 134);">
                        <th>S.NO.</th>
                        <th>Chemical Name of the Product</th>
                        <th>Product Code</th>
                        <th>CAS Number</th>
                        <th>Name of the API</th>
                        <th>Structure</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>(2S,3S,5S)-2-Amino-3-Hydroxy5-(1-Tetra hydro pyramid-2-only)-
                            3-Methyl butanoyl) Amino-1,6-
                            diphenylHexane-s-pyro glutamate
                            (THP)</td>
                        <td>THP</td>
                        <td>192726-06-0</td>
                        <td>Lopinavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST.1.jpg" alt=""></td>
                        
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Tetra Hydro Pyrimidine Butanoic
                            Acid (TPA) </td>
                        <td>TPA</td>
                        <td>192725-50-1</td>
                        <td>Lopinavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST2.jpg" alt=""></td>
                    <tr>
                        <td>03</td>
                        <td>N-((N-Methyl-N-((2-Isopropyl-4-
                            Thiazolyl)
                            Methyl)Amino)Carbonyl)-LValine, Lithium salt (MTV-3))</td>
                        <td>MTV-3</td>
                        <td>201409-23-6</td>
                        <td>Ritonavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST3.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>N-((N-methyl-N-((2-Isopropyl-4-
                            thiazolyl)Methyl)
                            amino)carbonyl)-L-Valine (or)
                            MTE
                            </td>
                        <td>MTE-III </td>
                        <td>201409-23-6</td>
                        <td>Ritonavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST4.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>N-Phenoxy Carbonyl-L-Valine
                            (PCV)</td>
                        <td>PCV</td>
                        <td>126147-70-4</td>
                        <td>Ritonavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST5.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>(2S,3S,5S)-2-Amino-3-Hydroxy5-(Tert-butyloxy Carbonyl)
                            Amino-1, 6-Diphenylhexane
                            Hemi Succinic Acid Salt (BDH
                            Succinic Acid Salt)
                            </td>
                        <td>BDH</td>
                        <td>183388-64-9</td>
                        <td>Ritonavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST6.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>Carbonic acid,4-Nitrophenyl-5-
                            Thizolyl Methyl Ester (or) 4-Nitro
                            Phenyl 1,3-Thizol-5-yl Methyl
                            Carbonate (NCT)
                            </td>
                        <td>NCT</td>
                        <td>144163-97-3</td>
                        <td>Ritonavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST7.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>(4R-cis)-1,1-Dimethylethyl- 6-(2-
                            Aminoethyl)-2,2 -Dimethyl-1,3-
                            Dioxane-4-Acetate (or)
                            Aminoketal (or) ATC (A)</td>
                        <td>ATC(A)</td>
                        <td>125995-13-3</td>
                        <td>Atrovastat in Calcium</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST8.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>N,N-Dimethyl-3-Phenyl-3-
                            Chloropropylamine .Hcl (Chloro
                            Compound) (NPC-III)</td>
                        <td>NPC-III </td>
                        <td>1011-59-2</td>
                        <td>Atomoxetine</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST9.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>5-Cyanophthalide</td>
                        <td>5-CP</td>
                        <td> 82104 -74 - 3 </td>
                        <td>Citalopram Hydro Bromide</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST10.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>2-Chloro-N-(2-Chloro-4-Methyl3-Pyridinyl)-3-Pyridine
                            Carboxamide (Carboxamide)</td>
                        <td>CAR-V</td>
                        <td>133627-46-0</td>
                        <td>Nevirapine</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST11.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>2-Chloromethyl-4-
                            methanesulfonyl-3,5-dimethyl
                            Pyridine hydrochloride.(or)
                            Chloro Compound
                            (or) EMN Stage-II</td>
                        <td>EMN-II</td>
                        <td>---</td>
                        <td>Esomeprazole Mg</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST12.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Toluene-4-Sulphonicacid-2-
                            thiophene-2-yl-ethyl ester (or)
                            CBI
                            </td>
                        <td>CBI</td>
                        <td>40412-06-4</td>
                        <td>Clopidogrel Bisulphate &Clopidogrel HBr</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST13.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>S (+) (2-Chloro phenyl) glycine
                            methyl ester tartrate (or) CLI /CLI
                            RP</td>
                        <td>CLI</td>
                        <td>141109-14-0</td>
                        <td>Clopidogrel Bisulphate &Clopidogrel HBr</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST14.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Methyl(+)-(S)-α-(ochlorophenyl)-6,7-dihydrothieno
                            [3,2-c] pyridine-5(4H)-
                            acetate,sulphate (1:1) (or) Thieno
                            [3,2-c]pyridine-5(4H)-
                            aceticacid,α–(2-chlorophenyl)-
                            6,7-dihydro-,methyl ester, (S)-,
                            sulfate(1:1) (or) CLF-II or CLY-II</td>
                        <td>CLF-II&CLY-II</td>
                        <td>135046-48-9</td>
                        <td>Clopidogrel Bisulphate &Clopidogrel HBr</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST15.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>N-(Methoxy Carbonyl)-L-Valine
                            or Moc Valine</td>
                        <td>MLV</td>
                        <td>74761-42-5</td>
                        <td>Daclatasvir&Ledipsavir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST16.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>MOC D phenyl glycine</td>
                        <td>MDP</td>
                        <td>50890-96-5</td>
                        <td>Velpatasvir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST17.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>(2s,5s)-1-((s)-2-(methoxy
                            carbonyl amino)-3-methyl
                            butanoyl)-5-methylpyrrolidine-2-carboxylic acid (or) MOC acid(MOA-4) </td>
                        <td>MOA-4</td>
                        <td>59278-00-1</td>
                        <td>Velpatasvir</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST18.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>2-Chloromethyl-4-Methane
                            Sulfonyl 3-Methyl Pyridine HCl
                            (Stage-SMP-II)</td>
                        <td>SMP-II</td>
                        <td>85052-88-6</td>
                        <td>Dexlansoprazole</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST19.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>N-methyl-1-[2-(propan-2-yl)-1,3-thiazol-4-yl] methanamine dihydrochloride (or) methyl thiazole amine dihydrochloride(or) MTV.2HCL</td>
                        <td>MTV.2
                            HCL</td>
                        <td>1185167-55-8</td>
                        <td>Cobicistat</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST20.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>L-Aminolactone (LAL) (Or) (S)-
                            3-Aminodihydro furan-2(3H)-One
                            Hydrobromide</td>
                        <td>LAL</td>
                        <td>15295-77-9</td>
                        <td>Cobicistat</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST21.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>(2R, 5R)-1, 6-Diphenylhexane-2,
                            5-diamine dihydrochloride (or)
                            Diamine dihydrochloride (DAD)
                            & DID
                            </td>
                        <td>DAD&DID</td>
                        <td>1247119-31-8</td>
                        <td>Cobicistat</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST22.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>2-oxo-6-propyl-1,2-
                            dihydropyridine-4-carboxylic acid(or) 4-pyridine carboxylic acid,1,2-dihydro-2-oxo-6-propyl(or) 1,2-dihydro-2-oxo-6-propylpyridine-4-carboxylic acid(PPC)</td>
                        <td>PPC </td>
                        <td>76594-12-2</td>
                        <td>Prothionamide</td>
                        <td><img src="<?php echo base_url();?>assets/frontend/images/products/ST23.jpg" alt=""></td>
                    </tr>
                </table>
             
        <!--introduction-section end-->
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

<!-- Mirrored from themetechmount.com/html/labostica/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 16:11:20 GMT -->
</html>