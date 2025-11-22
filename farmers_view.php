<?php
include ("header.php");
include("../dboperation.php");
$obj=new dboperation();
$s=1;
$sql="select * from tbl_farmer where value = 'accepted'";
$res=$obj->executequery($sql);
?>
<html>
    <body>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Accepted Farmers table </h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                           No
                          </th>
                          <th>
                           Name
                          </th>
                          <th>
                           	G-mail
                          </th>
                          <th>
                           Contact No
                          </th>
                            <th>
                           More details
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      
                        while($display=mysqli_fetch_array($res))
                        {
                          ?>
                        <tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $display["name"];?>
                          </td>
                           <td>
                        <?php echo $display["email"];?>
                          </td>
                           <td>
                        <?php echo $display["contact"];?>
                          </td>
                        
                        <td>
  <a  href="farmers.php?farid=<?php echo $display["farmerid"];?>" class="btn-success" onclick="return conform('are you sure you want to view?')">View more</a>
                       </td>
                       </tr>
                       <?php
                        }
                      
                        ?>                  
         </body>
</html>
<?php
include ("footer.php");
?>