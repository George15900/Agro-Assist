<?php
include("header.php");
$id=$_GET['idd']; 
?><br><br>
<center><h2>Payment Method</h2></center>
<div class="container d-flex justify-content-center mt-5 mb-5">
  <div class="row g-3">
    <!-- Payment Method -->
    <div class="col-md-6">  
     <center><h2></h2></center><br><br><br>
      <span>Payment Method</span>
      <div class="card">
        <div class="accordion" id="accordionExample">                    
          <!-- Paypal -->
          <div class="card">

            <div class="card-header p-0" id="headingTwo">
              
                <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" 
                        type="button" data-toggle="collapse" 
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="d-flex align-items-center justify-content-between">
                    <span>Paypal</span>
                    <img src="https://i.imgur.com/7kQEsHU.png" width="30">                            
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <input type="text" class="form-control" placeholder="Paypal email">
              </div>
            </div>
          </div>

          <!-- Credit Card -->
          <div class="card">
            <div class="card-header p-0">
              <h2 class="mb-0">
                <button class="btn btn-light btn-block text-left p-3 rounded-0" 
                        data-toggle="collapse" data-target="#collapseOne" 
                        aria-expanded="true" aria-controls="collapseOne">
                  <div class="d-flex align-items-center justify-content-between">
                    <span>Credit card</span>
                    <div class="icons">
                      <img src="https://i.imgur.com/2ISgYja.png" width="30">
                      <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                      <img src="https://i.imgur.com/35tC99g.png" width="30">
                      <img src="https://i.imgur.com/2ISgYja.png" width="30">
                    </div>                              
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body payment-card-body">                        
                <span class="font-weight-normal card-text">Card Number</span>
                <div class="input">
                  <i class="fa fa-credit-card"></i>
                  <input type="text" class="form-control" placeholder="0000 0000 0000 0000" required
                  maxlength="16" pattern="[0-9]{16}" title="Enter a valid 16 digit card number">                          
                </div> 
                <div class="row mt-3 mb-3">
                  <div class="col-md-6">
                    <span class="font-weight-normal card-text" >Expiry Date</span>
                    <div class="input">
                      <i class="fa fa-calendar"></i>
                      <input type="text" class="form-control" placeholder="MM/YY"
                       required pattern="^(0[1-9]|1[0-2])\/\d{2}$" title="Enter expiry date in MM/YY format (e.g. 05/28)" maxlength="7">                                
                    </div>                             
                  </div>
                  <div class="col-md-6">
                    <span class="font-weight-normal card-text" required>CVC/CVV</span>
                    <div class="input">
                      <i class="fa fa-lock"></i>
                      <input type="text" class="form-control" placeholder="000" 
                    required  pattern="[0-9]{3,4}"  title="Enter a valid 3 or 4 digit CVV" maxlength="4">                                
                    </div>                               
                  </div>
                </div>
                <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with SSL certificate</span>                         
              </div>
            </div>
          </div>                    
        </div>
      </div>
    </div>

    <!-- Summary -->
    <div class="col-md-6"><br><br><br><br>
      <span>Summary</span>
      <div class="card">
        <div class="d-flex justify-content-between p-3">
          <div class="d-flex flex-column">
            <span>Pro (Billed) <i class="fa fa-caret-down"></i></span>
            <a href="#" class="billing">Save 20% with annual billing</a>                        
          </div>
          <div class="mt-1">
            <span class="super-month">₹ 500</span>
            <span class="super-month">/rupess</span>
          </div>                      
        </div>
        <hr class="mt-0 line">
        <div class="p-3">
          <div class="d-flex justify-content-between mb-2">
            <span>G.S.T</span>
            <span>-20%</span>                       
          </div>
          <div class="d-flex justify-content-between">
            <span>Amount<i class="fa fa-clock-o"></i></span>
            <span>₹ 10</span>                        
          </div>
        </div>
        <hr class="mt-0 line">
        <div class="p-3 d-flex justify-content-between">
          <div class="d-flex flex-column">
            <span>Total Amount</span>
            <small> ₹ 500 + ₹10</small>                        
          </div>
          <span>₹ 510</span>
        </div>
        <div class="p-3">
          <form action="payment_action.php" method="post">
            <input type="hidden" name="requestid" value="<?php echo  $id ?>">
          <input type="submit" value=" BUY  NOW " name="pay" class="btn btn-primary btn-block free-button"> 
</form>
          <div class="text-center">
            <a href="#">Have a promo code?</a>
          </div>     
        </div>                    
      </div>
    </div>              
  </div>  

</div>

<?php
include("footer.php"); // should close </body></html>
?>
