<!--Pop Up box start-->
<form method="POST" name="customerData" action="ccavRequestHandler.php">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><img src="../img/cart-icon.jpg"> Cart (1 Items )</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body start -->
        <div class="modal-body">
		
		 
		  <div class="row">
		  <input type="hidden" name="tid" id="tid" readonly />&nbsp;&nbsp;<input type="hidden" name="merchant_id" value="272337" />&nbsp;&nbsp;<input type="hidden" name="order_id" value="<?php echo mt_rand(10000000, 99999999) ?>"/>&nbsp;&nbsp;<input type="hidden" name="amount" value="17700" />&nbsp;&nbsp;<input type="hidden" name="currency" value="INR"/>&nbsp;&nbsp;<input type="hidden" name="redirect_url" value="https://www.finowings.com/technical-analysis-course/ccavResponseHandler.php"/>&nbsp;&nbsp;<input type="hidden" name="cancel_url" value="https://www.finowings.com/technical-analysis-course/ccavResponseHandler.php"/>&nbsp;&nbsp;<input type="hidden" name="language" value="EN"/>
		  </div>
        
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-6"><h6>ITEM DETAILS</h6></div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-6"><h6>PRICE	</h6></div>
          </div>
          
          <hr>
         
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-12">
          <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-6 col-6">Technical Analysis (Live)<br><b>Instructor:</b> Mukul Agrawal</div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 ml-auto"><h6>₹17,700 <br>incl. 18% GST</h6></div>
          </div>
          
		  <div class="row">
		  
		  </div>
		  
        <hr>
          
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-6"><h6><a href="#" style="text-decoration:none; color:#333333;"></a></h6></div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-6"><input type="submit" value="CheckOut"></div>
          </div>
          
          
        
        </div>
        <!-- Modal body end-->
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
 </form> 
<!--Pop Up box end-->