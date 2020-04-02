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
    <link href="css/leave_review.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	<div id="page">
     <?php  include 'hedar.php'; ?>
     <?php

      if ($_SESSION['user_id'] == "") 
         {
	      header('location:account.html');
         }
       ?>
	<main>
	
		
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h2>Spread your products and earn a lot of money</h2>
						<div class="rating_submit">
							<div class="form-group">
							<label class="d-block">Evaluate your product</label>
							<span class="rating mb-0">
								<input type="radio" class="rating-input" id="5_star" name="rating-input" value="5">
								<label for="5_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="4_star" name="rating-input" value="4"><label for="4_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="3_star" name="rating-input" value="3"><label for="3_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="2_star" name="rating-input" value="2"><label for="2_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="1_star" name="rating-input" value="1"><label for="1_star" class="rating-star"></label>
							</span>
							</div>
						</div>
						<div class="form-group">
							<label>product name</label>
							<input id="title_m" class="form-control" type="text" value="" placeholder="product name">
						</div>
						<div class="form-group">
							<label>Add text to a product</label>
							<textarea id="text_m" class="form-control" style="height: 180px;" placeholder="Write your review to help others learn about this product online"></textarea>
					</div>
					<label>Add your product price</label>
				    <div  class="col-xl-5 col-lg-5 col-md-6 col-6">
	                      <div style="right:5%;" class="numbers-row">
	                         <input type="text" value="1" id="mony" class="qty2" name="quantity_1">
	                         <div class="inc button_inc">+</div>
	                         <div class="dec button_inc">-</div>
	                         <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
	                 </div>
	                 <br>
				     <div class="form-group">
							<label>Choose the first product image</label>
							<div  class="fileupload"><input id="file" type="file" onchange="viewimgem(this)" name="fileupload" accept="image/*"></div>
					</div>
					<div id="imge_m">
							
				    </div>
				    <img id="close" src="close.png" style="width:20px; height: 20px; display: none;">
				    <div class="form-group">
							<label>Choose the second product image</label>
							<div  class="fileupload"><input id="file1" type="file" onchange="viewimgem1(this)" name="fileupload1" accept="image/*"></div>
					</div>
					<div id="imge_m1">
							
				    </div>
				    <img id="close1" src="close.png" style="width:20px; height: 20px; display: none;">
				    <br>

					<select id="Producer" class="custom-select custom-select-sm">
                      <option selected>Choose the type of product</option>
                      <option value="laptop">laptop</option>
                      <option value="Phones">Phones</option>
                      <option value="technology">technology</option>
                      <option value="Clothes">Clothes</option>
                      <option value="shoes">shoes</option>
                      <option value="Accessories">Accessories</option>
                     <option value="Other than that">Other than that</option>
                    </select>
                    <br>
                    <br>
				   <label>Choose an opponent</label>
				   <br>
	                   <select id="k" class="selectpicker">
                           <option value="%10">%10</option>
                           <option value="%20">$20</option>
                           <option value="%30">$30</option>
                           <option value="%40">$40</option>
                           <option value="%50">$50</option>
                           <option value="%60">$60</option>
                           <option value="%70">$70</option>
                           <option value="%80">$80</option>
                           <option value="%90">$90</option>

                      </select>
						
						<div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">
									Publish the product without any objections or restrictions
									<input id="checkbox" type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<br>
						<a  style="margin-right: 666px;" class="btn_1 add_m 
						new_m<?php echo $_SESSION['user_id']?>">Submit review</a>
					</div>
					<h5 style="color:red;" id="text_t"></h5>
			        <h5 style="color:blue;" id="text_ts"></h5>

				</div>
		</div>
		</div>
	</main>
	</div>
	
	<div id="toTop"></div><!-- Back to top button -->
	    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

   <script>
   	$(document).ready(function(){
      $(document).on('click','.add_m',function(){
           
         var checkbox=$('#checkbox').is(':checked');
         var title_m=$("#title_m").val();
         var Producer=$("#Producer").val();


     if (checkbox == true) {
        
           if (title_m != "") {

            if (Producer != "Choose the type of product") {


         var fd = new FormData();
         var files = $('#file')[0].files[0];
         fd.append('file',files);
         var files1 = $('#file1')[0].files[0];
         fd.append('file1',files1);
         var star=$("input[type='radio']:checked").val();
         fd.append('star',star);
         var text_m=$("#text_m").val();
         fd.append('text_m',text_m);
         var title_m=$("#title_m").val();
         fd.append('title_m',title_m);
         var mony=$("#mony").val();
         fd.append('mony',mony);
         var Producer=$("#Producer").val();
         fd.append('Producer',Producer);
         var k=$("#k").val();
         fd.append('k',k);
         

       $.ajax({
         url:'action.php',
         method:'POST',
         data:fd,
         processData: false,
         contentType: false,
         success: function(data)
         {
           $("#text_ts").text("The product has been published");
           $("#text_t").html("");

         }
     });
    
     }else{
     	$("#text_t").text("Please select the product type");
     }

     }else{
        $("#text_t").text("Please enter the product name");

     }
     }else{
    	$("#text_t").text("Please agree to the terms");
    }
   });
  });
   var user_id='<?php echo $_SESSION['user_id']; ?>';
   $(document).on('click','.new_m'+user_id,function(){
     var action="new_m";
     setTimeout( function(){
        $.ajax({
         url:'action1.php',
         type:'post',
         data:{action:action},
         success: function()
         {  
         }
     });
    },4000);
   });  

</script>	
 <script type="text/javascript">
  function viewimgem(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
           $("#imge_m").html('<img src="'+e.target.result+'"class="upload-preview" style="width:200px;" />');   
         }
         $("#close").show();
    fileReader.readAsDataURL(objFileInput.files[0]);
    }
}

function viewimgem1(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
           $("#imge_m1").html('<img src="'+e.target.result+'"class="upload-preview" style="width:200px;" />');   
         }
         $("#close1").show();
    fileReader.readAsDataURL(objFileInput.files[0]);
    }
}

$(document).on('click','#close',function(){
    $("#imge_m").html('');
    $("#close").hide();
    $("#file").val("");
});
$(document).on('click','#close1',function(){
    $("#imge_m1").html('');
    $("#close1").hide();
    $("#file1").val("");

});
</script>
</body>
</html>