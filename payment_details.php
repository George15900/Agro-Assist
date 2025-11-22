<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$idg=$_GET['idm'];
$id=$_SESSION['farmerid'];  
$sql="select * from tbl_payment p inner join tbl_request r on p.requestid=r.requestid 
      inner join tbl_user u on r.userid=u.userid 
      inner join tbl_farmerservice s on s.farmerservice_id=r.farmerservice_id
      inner join tbl_service q on q.serviceid=s.serviceid 
      where s.farmerid='$id' and p.status='pay' and p.payment_id='$idg'";
$result=$obj->executequery($sql);
?>

<div class="container-fluid">
    <a class="navbar-brand" href="Payment_more.php">
        Back <i class="bi bi-arrow-left-short"></i>
    </a></div>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h4 class="card-title">Payment Details</h4><br>
                  <table class="table table-striped">
 <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Customer Name
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Field
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $s=1;
                        while($display=mysqli_fetch_array($result))
                        {
                          ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $display["name"];?>
                          </td>
                          <td>
                        <?php echo $display["servicename"];?>
                          </td>
                        <td>
                        <?php echo $display["Field"];?>
                          </td>
                         <td>
                        ₹ 470 rs
                          </td>
                          <td>
                        <?php echo $display["payment_date"];?>
                          </td>
                          <td>
                        Payed
                          </td>
                       <?php
                        }
                        ?>  
                        </tr>                
                      </tbody>
</table>
<?php
include ("footer.php");
?>