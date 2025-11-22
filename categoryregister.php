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
                  <h4 class="card-title">category register</h4>
                  <p class="card-description">
                    Enter the deatails
                  </p>
                  <form class="forms-sample" action="actioncatgoer.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category name</label>
                      <input type="tex" name="Category_name" class="form-control" id="exampleInputUsername1" placeholder="Category name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" name="Description" class="form-control" id="exampleInputEmail1" placeholder="Description" required>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image">
                    </div>
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