<?php
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation();
$sql="select * from tbl_service ";
 $result=$obj->executequery($sql);
?>
    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <?php
                while($display=mysqli_fetch_array($result))
                        {
                ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="../uploads/<?php echo $display["image"];?>" style=" width:300px ; height:180px" alt="">
                        <h6 class="mb-3"><?php echo $display["servicename"]; ?></h6>
                        <a href="#" class="text-decoration-none">Click on below eye button</a>
                        <div class="btn-action d-flex justify-content-center">

                           <a class="btn bg-secondary py-2 px-3 rounded-circle" href="searchaction.php?id=<?php echo $display['serviceid']; ?>">
                                <i class="bi bi-eye text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                        
                <?php
                }
                ?>
                 <div class="d-flex justify-content-center mt-3">
            <span style="font-size:24px; margin:0 15px; cursor:pointer;">&#8592;</span>
            <span style="font-size:24px; margin:0 15px; cursor:pointer;">&#8594;</span>
        </div>
            </div>
        </div>
  </div>
    <!-- Products End -->
   <?php
include ("footer.php");
?>