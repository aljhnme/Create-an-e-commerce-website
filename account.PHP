
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
	<main class="bg_gray">
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		</div>
		<h1>Sign In or Create an Account</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<?PHP
                  if ($_SESSION['user_id'] == "") 
                  {
				?>
				<div class="box_account">
					<h3 class="client">Already Client</h3>
					<div class="form_container">
						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
							</div>
							<div class="col-lg-6 pl-lg-1">
								<a href="#0" class="social_bt google">Login with Google</a>
							</div>
						</div>
						<div class="divider"><span>Or</span></div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="emaill" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password_in" id="passwordl" value="" placeholder="Password*">
						</div>
						<h5 id="text_s_l"></h5>
						<div class="clearfix add_bottom_15">
							<div class="checkboxes float-left">
								<label class="container_check">Remember me
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width login"></div>
						<div id="forgot_pw">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
						</div>
					</div>
					<!-- /form_container -->
				</div>
				<?PHP
                  }else{
                  	?>
                  <div class="box_account">
					<h3 class="client">Already Client</h3>
					<div class="form_container">
						<div class="row no-gutters">
                         <p class="font-weight-bold">You are already registered. You want to log out<a href="logout.php"> LOGOUT</a></p>
                       </div>
					 </div>
				</div>
                  	<?php
                  }
				?>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<div class="form_container">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="emailr" placeholder="Email*">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password_in_2" id="passwordr" value="" placeholder="Password*">
						</div>
						<div class="private box">
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input id="namef" type="text" class="form-control" placeholder="Name*">
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input id="namel" type="text" class="form-control" placeholder="Last Name*">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input  type="text" class="form-control address" placeholder="Full Address*">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input type="text" class="form-control City" placeholder="City*">
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Postal Code*">
									</div>
								</div>
							</div>
							<!-- /row -->
							
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="country" id="country">
													<option value="" selected>Country*</option>
													<option value="Europe">Europe</option>
													<option value="United states">United states</option>
													<option value="Asia">Asia</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Telephone *">
									</div>
								</div>
							</div>
							<!-- /row -->
							
						</div>
						<!-- /private -->
						<div class="company box" style="display: none;">
							<div class="row no-gutters">
								<div class="col-12">
									<div class="form-group">
										<input  type="text" class="form-control" placeholder="Company Name*">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Full Address">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="City*">
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Postal Code*">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="country" id="country_2">
													<option value="" selected>Country*</option>
													<option value="Europe">Europe</option>
													<option value="United states">United states</option>
													<option value="Asia">Asia</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Telephone *">
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<h4 id="text_s"></h4>
							<label class="container_check">Accept <a href="#0">Terms and conditions</a>
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="text-center"><input type="submit" value="Register" class="btn_1 full-width Register"></div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</main>

	</div>
	
	<div id="toTop"></div><!-- Back to top button -->
	
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <script>
		$('input[name="client_type"]').on("click", function() {
		    var inputValue = $(this).attr("value");
		    var targetBox = $("." + inputValue);
		    $(".box").not(targetBox).hide();
		    $(targetBox).show();
		});
	</script>
    <script type="text/javascript">
    	$(document).ready(function(){
           $(document).on('click','.login',function(){
               
             var email=$('#emaill').val();
             var password=$('#passwordl').val();
             var action ='login';

             $.ajax({
             	url:"action1.php",
             	type:"post",
             	data:{email:email,password:password,
             		action:action},
                success:function(data){
                  $("#text_s_l").html(data);
                  if (data == "good") {
                  	window.location.replace('index.php');
                  }
                }
             });
           });


           $(document).on('click','.Register',function(){
               var email=$("#emailr").val();
               var password=$("#passwordr").val();
               var namef=$("#namef").val();
               var namel=$("#namel").val();
               var address=$(".address").val();
               var city=$(".City").val();
               var country=$("#country").val();
               var action ="register";

               $.ajax({
                 url:"action1.php",
                 type:"post",
                 data:{email:email,namel:namel,password:password,namef:namef,city:city,country:country,address:address,action:action},
                 success:function(data)
                 {
                     $("#text_s").html(data);
                 }
               });
           });
    	});
    </script>
</body>
</html>