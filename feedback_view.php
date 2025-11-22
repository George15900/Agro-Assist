<?php
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation();
$id=$_GET['idm'];
$sql="select * from  tbl_farmer i inner join tbl_farmerservice j on i.farmerid=j.farmerid
inner join tbl_location l on i.location_id=l.location_id
inner join tbl_district d on l.district_id=d.district_id
inner join tbl_service s on j.serviceid =s.serviceid 
where i.farmerid='$id'";
 $result=$obj->executequery($sql);
 $row = mysqli_fetch_array ($result);
?>
<a class="navbar-brand"href="feedback.php">Back
        <i class="bi bi-arrow-left-short"></i>
    </a> 
    <div class="container-fluid about pt-5">
    <div class="container">
        <div class="mb-3 pb-2">
                    <h1 class="display-5">Details of Framer</h1>
                </div>

        
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="d-flex h-100 border border-5 border-primary border-bottom-0 align-items-center justify-content-center" style="overflow: hidden;">
                    <img class="img-fluid" src="../uploads/<?php echo $row["photo"];?>" 
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pb-5">
                <div class="mb-3 pb-2">
                    <h3 class="display-5">Name: <?php echo $row['name']; ?></h3>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">E-mail: <?php echo $row['email']; ?></5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">Contact: +91 <?php echo $row['contact']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">No.of.framer: <?php echo $row['additional_farmers']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">Service: <?php echo $row['servicename']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">Field Type: <?php echo $row['Field']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">Daily Price: ₹<?php echo $row['amount']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">Location: <?php echo $row['location_name']; ?></h5>
                </div>
                <div class="mb-3 pb-2">
                    <h5 class="display-7">District: <?php echo $row['district_name']; ?></h5>
                </div>
</div> 
        </div>

    </div>       </div>
    <br>
    <h4 class="text-left">
        Comments :</h4>
<?php
    $sql1="select * from  tbl_feedback r
inner join tbl_request k on r.requestid =k.requestid 
inner join tbl_user u on k.userid=u.userid 
inner join tbl_farmerservice j on k.farmerservice_id =j.farmerservice_id 
where j.farmerid ='$id'";
 $result1=$obj->executequery($sql1);
  while($row1= mysqli_fetch_array ($result1))
                        { 
                            ?><br>
<div class="form-floating mb-3">
     <label for="floatingTextarea2Disabled"><?php echo $row1['name'];?></label>
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px" disabled>
    <?php echo $row1['feedback'];?>
  </textarea>
</div>
 <?php
                        }
include ("footer.php");
?>
