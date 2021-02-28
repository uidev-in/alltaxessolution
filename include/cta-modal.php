<style>

.cta-form-card button.close{
position: absolute;
top: 0;
right: 0;
color: #2e2751!important;
border: 2px solid #2e2751;
padding: 2px 5px!important;
border-radius: 20px;
font-size: 20px!important;
opacity: 1!important;
-webkit-transition: -webkit-transform 600ms;
-moz-transition: -moz-transform 600ms;
-ms-transition: -ms-transform 600ms;
-o-transition: -o-transform 600ms;
transition: transform 600ms;
}
.cta-form-card button.close:hover{
background-color: #000000;
color: #fff!important;
font-weight: 500!important;
}
button.close:hover {
background: #000000;
-webkit-transform: rotate(360deg) scale(1.10);
-moz-transform: rotate(360deg) scale(1.10);
-ms-transform: rotate(360deg) scale(1.10);
-o-transform: rotate(360deg) scale(1.10);
transform: rotate(360deg) scale(1.10);
-webkit-transition: -webkit-transform 600ms;
-moz-transition: -moz-transform 600ms;
-ms-transition: -ms-transform 600ms;
-o-transition: -o-transform 600ms;
transition: transform 600ms;
}
	 input[type="submit"].bizwheel-btn:hover{
		background: #fff!important;
		color: #ff7364!important;
		border: 2px solid #ff7364!important;
	}	
	/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<!--CTA Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content p-4">
          <div class="modal-body">
            <div class="cta-form-card">
              <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <h4 class="text-center pb-4 mb-0">Get Free <b>Quote!</b></h4>
              <form class="pp-form">
                  <div class="row">
                        <!-- First Name -->
                        <div class="input-group col-lg-12 mb-4">
                          <input style="padding: 10px!important;" id="ctafirstname" type="text" name="ctafirstname" placeholder="Full Name" class="form-control pp-form-input bg-white border-sm" required="">
                        </div>

                        <!-- Email Address -->
                         <div class="input-group col-lg-12 mb-4">
                          <input style="padding: 10px!important;" id="ctaEmail" type="email" name="ctaEmail" placeholder="Email Address" class="form-control pp-form-input bg-white border-sm" required="">
                        </div> 
    
                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                          <input style="padding: 10px!important;" id="ctaContact" type="number" name="ctaContact" placeholder="Phone Number" class="form-control pp-form-input bg-white border-sm" required="">
                        </div>
    
    
                           <!-- category -->
                         <div class="input-group col-lg-12 mb-5">
                          <select style="padding: 6px 10px!important;" id="ats" name="" class="form-control pp-form-select custom-select bg-white  border-sm dropdown" required="">
							   <option class="placeholder" selected disabled value="">Select Services</option>
							   <option>Food Licence</option>
							   <option>IEC Licence</option>
							   <option>GST</option>
							   <option>Income Tax</option>
							   <option>TDS</option>
                          </select>
                          
                         </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0  text-center">
                            
                            <input class="bizwheel-btn m-auto"  type="submit" name="ats-cta" value="Submit Now" style="background: #ff7364;color: #fff;">
                        </div>
    
                  </div>
                  
                </form>
            </div>
          </div>
          <!-- <div class="modal-footer pt-4"> <button type="button" class="btn btn-light mx-auto" style="width:45%" data-dismiss="modal">Cancel</button> <button type="button" class="btn login-btn mx-auto" style="width:45%">Send</button> </div> -->
      </div>
  </div>
</div>
<!--CTA Modal-->

