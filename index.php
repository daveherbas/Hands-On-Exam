<!--
Hands On Exaam
-->
<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Expense Manager System | Home :: Dave C. Herbas</title>


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body >
 
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
 </div>
	
 
       <div class="home-sec" id="home" >
           <div class="overlay">
				<div class="container">
				   <div class="row text-center " >
				   
					   <div class="col-lg-12  col-md-12 col-sm-12">
					   
						<div class="flexslider set-flexi" id="main-section" >
							<ul class="slides move-me">
								<!-- Slider 01 -->
								<li>
									  <h1>Simple Expense Manager System </h1>
									<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
										SIGN IN
									</a>
								</li>
								<!-- End Slider 01 -->
							</ul>
						</div>
					 
					</div>
						
				   </div>
                </div>
           </div>
           
       </div>

      <!-- COURSES SECTION END-->
<!-- Script -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">User Login</h4>
              </div>
              <div class="modal-body">
     
				 <form role="form" method="post" action="userlogin.php">
				 
                   <fieldset>
				   
					  <div class="form-group">
                                <input class="form-control" autocomplete="off" placeholder="Username" name="user_username" type="text" required>
							</div>
							<div class="form-group">
                                <input class="form-control" autocomplete="off" placeholder="Password" name="user_password" type="password" required>
							</div>
		
					</fieldset>
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="user_login">Login</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				
				  </form>
              </div>
            </div>
          </div>
        </div>
		
		
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
          &copy Simple Expense Manager System | All Rights Reserved |  <a style="color: #fff" target="_blank">Design by : Dave C. Herbas</a>
    </div>
     <!-- FOOTER SECTION END-->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
