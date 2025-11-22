<?php
include_once("../dboperation.php");
$obj=new dboperation();
$districtid=$_POST['districtid'];
$sql="SELECT * FROM tbl_location  l inner join tbl_district d on l.district_id=d.district_id  where l.district_id='$districtid'";
$result=$obj->executequery($sql);
?>
    
                <div class="form-group" >
                      <label for="exampleSelectGender">location</label>
                  <select class="form-control" id="location" name='location'> 
                        <option value='' selected disabled>-----CHOOSE YOUR LOCATION-----</option>
                    <?php
                    while ($display = mysqli_fetch_array($result))
                    {
                    ?>
                      <option value="<?php echo $display['location_id']; ?>"><?php echo $display['location_name']; ?></option>
                    <?php
                    }
                    ?>
                  </select>
             </div>