<?php
session_start();
include ("header.php");
include ("../dboperation.php");
$obj=new dboperation;
$sql="select * from tbl_payment p inner join tbl_request r on p.requestid=r.requestid 
      inner join tbl_user u on r.userid=u.userid 
      inner join tbl_farmerservice s on s.farmerservice_id=r.farmerservice_id
      inner join tbl_service q on q.serviceid=s.serviceid 
      inner join tbl_farmer f on f.farmerid=s.farmerid";
$result=$obj->executequery($sql);
$s="select * from tbl_user";
$rel=$obj->executequery($s);
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
                            Customer mial
                          </th>
                          <th>
                            Customer Contact
                          </th>
                          <th>
                            Farmer Name
                          </th>
                            <th>
                            Farmer Contact
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
                        while($d=mysqli_fetch_array($rel))
                        {
                        while($display=mysqli_fetch_array($result))
                        {
                          ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          </td>
                          <td>
                        <?php echo $d["name"];?>
                          </td>
                          <td>
                        <?php echo $d["email"];?>
                          </td>
                          <td>
                        <?php echo $d["contact"];?>
                          </td>
                            <td>
                        <?php echo $display["name"];?>
                          </td>
                            <td>
                        <?php echo $display["contact"];?>
                          </td>
                          <td>
                        <?php echo $display["servicename"];?>
                          </td>
                        <td>
                        <?php echo $display["Field"];?>
                          </td>
                         <td>
                         <?php echo $display["admin_payment"];?>
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
                        }
include ("footer.php");
?>