

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<link rel="shortcut icon" href="http://www.hikesoftwares.com/new-images/favicon.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
<meta name="format-detection" content="telephone=no" />
<title>HikeSoftwares - PayNow</title>
<meta name="description" content="HikeSoftwares - PayNow" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style>
@media screen and (min-device-width: 320px) and (max-device-width: 480px) {
 .licontact{
        float: none;
        width: 100%!important;        
    }
    .srkt{
        display: none!important;
    }   
 }
.freeQuoteForm1.cont_form1 .input_bg {
    background-color: #eae8e8;
    border-radius: 5px;
    float: left;
    margin-bottom: 10px;
    padding: 4px;
    width: 100%!important;
 }
 .pay{
    height: 50px;
    width: 200px;
    margin: 0 auto;
    position: relative;
    float: none !important;
    margin-top: 29px;
    background-color: #ea212d;
    opacity: 1 !important;
    color: #ffffff;
    font-weight: bold;
    font-size: 17px;
 }
 p{
    margin-bottom: 8px !important;
 }
 .h_banner.pay {
    min-height: 208px;
    background-color: #164563;
    width:100%;
}
</style>
<?php include "blocks/head.php";?>
 </head>
 <body>
		<!-- Header part start -->
          <?php include "blocks/header.php";?>
          	<!-- Header part END -->
              	<section class="h_banner pay">
		<div class="container">
		  <div class="row">
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
				   <h1 style="text-align:center;">Pay Now</h1>
				   <p><a href="index.php">Home /</a> <span>Pay Now</span></p>
             </div>
		  </div>
		</div>	
	</section>
<div class="contact_us">
   <div class="container">
      <div class="row">
      <div class="col-md-12">
                <div class="col-md-8 col-sm-12 col-xs-12" >
                   <!-- <h2>Contact us</h2>
                    <p>
                   Please Fill your Name, Email ID , Mobile Number and Query/Suggestion and Then Submit The Form. We'll Contact As soon as possible.
                    </p>-->
                    <div class="col-md-12" style="background-color:#FFFFFF; border:1px solid #ddd; padding-bottom: 15px ;">
                        <h2 style="margin-left: 0px ;">Make Your Payment</h2>
                        <form class="contact_form" autocomplete="off" method="post">
                            <div class="form-group">
                                <input required="" class="form-control" name="txtName" id="m_name" placeholder="Your name" type="text">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="txtEMail" id="m_email" placeholder="Email address" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required="" class="form-control styled number-only" name="txtPhone" id="m_phone" placeholder="Phone number" type="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="txtbox form-control" name="txtLocation" id="m_service">
                                                <option value="">Select Services</option>
                                                <option value="Web Development"> Web Development</option>
                                                <option value="Mobile Applications">Mobile Applications</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Website Design">Website Design</option>
                                                <option value="Website Redesign">Website Redesign</option>
                                                <option value="Other">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required="" class="form-control styled number-only" name="txtAmount" id="m_amount" placeholder="Enter Amount (in INR)" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><textarea required="" class="form-control" name="txtMessage" id="m_message" placeholder="Write you message here..." style="height:100px;"></textarea></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><div class="g-recaptcha" data-callback="recaptchaCallback" style="transform:scale(1.22);-webkit-transform:scale(1.00);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LcpThcUAAAAAEvnLhH0xWXiKW3G7Knry_uNsGIf"></div></div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align:center;"> 
                                <button type="button" onclick="submitForm();" id="statussubmit" disabled class="btn btn-three pull-left pay" style="float:none !important;">Pay Now</button>
                            </div>
                        </form>
					</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row" style="background-color:#FFFFFF; border:1px solid #ddd;">
                	<div class="col-md-12">
                	<h2 style="color: #ed1c24;">Hike IT Services Pvt. Ltd.</h2>
                    <div class="contact-info">
                        <h2>India Office</h2>
<p>2/73 Lalita Park,First Floor</p>
<p> Laxmi Nagar, Near Gurudwara</p>
<p>Delhi - 110092, India</p>
                        <p><i class="fa fa-envelope" style="font-size: 25px;margin-left: 4px;"></i>&nbsp; info@hikesoftwares.com</p>
                        <p>&nbsp;<img src="new-images/india-flag.png" alt=""/>&nbsp;+91-880-210-3824 </p>
						<p>&nbsp;<img src="new-images/india-flag.png" alt=""/> &nbsp;011-43587934</p>
                    </div>
                    </div>
                    </div>
                	<!--<h2>Testimonial</h2>
                    <div class="contrast-box color-two-c">
                    	<p>
                        <i class="fa fa-quote-left"></i> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <small>John Doe , CEO at Company Inc</small>
                        </p>
                    </div>-->
                </div>
                </div>
            </div>
   </div>
</div>
<!-- Footer Main start -->
  <?php include "blocks/footer.php";?>
</div>
				</div>
			</div>
		</div>
	</div>
</section>
 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 		<script type="text/javascript">
		  $(document).ready(function(){
		      $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
});
        </script>	
<!-- Footer Main END -->
<?php
if(@$_GET['msg']=='success')
{
    echo "<script>alert('Data submitted successfully')</script>";
}
?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {};
    function submitForm(){
        
            var m_name = document.getElementById('m_name').value;
            var m_email = document.getElementById('m_email').value;
            var m_phone = document.getElementById('m_phone').value;
            var m_service = document.getElementById('m_service').value;
            var m_amount = document.getElementById('m_amount').value;
            var m_message = document.getElementById('m_message').value;
            m_amount = m_amount*100;
            
            options = {
            "key": "rzp_test_RQ2mZ0f0sJ1wkn",
            "amount": m_amount, // 2000 paise = INR 20
            "name": m_name,
            "description": "HikeSoftwares Payment Against Services Delivered for "+m_service,
            "image": "https://hikesoftwares.com/new-images/newlogo1.png",
            "handler": function (response){
                alert("Thanks for the payment, Your Txn ID is : "+response.razorpay_payment_id);                
            },
            "prefill": {
                "name": m_name,
                "email": m_email
            },
            "notes": {
                "address": m_message
            },
            "theme": {
                "color": "#ea212d"
            }
        };
        
        var rzp1 = new Razorpay(options);
        rzp1.open();

        return false;
    }


</script>

</body>
</html>