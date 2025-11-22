<?php
include ("header.php");
?>
<html>
    <body>
    
<div class="main-panel">  
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">District register</h4>
                  <p class="card-description">
                    Enter the deatails
                  </p>
                  <form class="forms-sample" action="districtaction.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">District name</label>
                      <input type="text" name="District_name" class="form-control" id="exampleInputUsername1" required placeholder="District name">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>     

    </body>
</html>
<?php
include ("footer.php");
?>