<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();
$id=$_GET['farid'];
$sql="select * from tbl_farmer i inner join tbl_location r on i.location_id = r.location_id inner join tbl_district d
 on r.district_id = d.district_id where farmerid = '$id'";
$res=$obj->executequery($sql);
$display=mysqli_fetch_array($res);
?>
<html>
    <body>
    <div class="container-fluid">
    <a class="navbar-brand" href="farmer_view_action.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>
<div class="main-panel">  
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2>Farmer registeration Details</h2><br>
                  
                  <form class="forms-sample" action="farmeraction.php" method="POST" enctype="multipart/form-data">
                    <img src="../uploads/<?php echo $display['photo'];?>" class="rounded float-end" alt="hiii" weidth="150px" height="150px">
                    <h5>Name   : <?php echo $display['name'];?></h5>
                    <h5>G-mail : <?php echo $display['email'];?></h5>
                    <h5> Contact : <?php echo $display['contact'];?></h5>
                    <h5>District: <?php echo $display['district_name'];?></h5>
                    <h5>Location: <?php echo $display['location_name'];?></h5>
                    <h5> Date : <?php echo $display['regdate'];?></h5>
                    <h5> Number of farmers: <?php echo $display['additional_farmers'];?></h5>
                

                    <h5>Id-Card:<br>
                      <img src="../uploads/<?php echo $display['idproof'];?>" class="rounded float-end" alt="hiii" weidth="350px" height="200px">
                    <h5>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <input type="hidden" name="farmerid" value="<?php echo $display['farmerid'];?>">

  <button type="submit" class="btn btn-primary" name="Accept">Accept</button></a> &nbsp&nbsp&nbsp
  <button type="submit" class="btn btn-primary" name="reject">Reject</button>

</div>
                    </h5>
                  </form>
                </div>
              </div>
            </div>     

    </body>
</html>
<?php
include ("footer.php");
?>