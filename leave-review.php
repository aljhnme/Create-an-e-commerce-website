<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Add product details</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
     <div id="page">
        <?php include 'navigation_bar.php'; ?>
        <main>
            <div class="container margin_60_35">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="write_review">
                            <form method="post" id="myForm_INS">
                                <h1>Post your products and earn a lot of money</h1>
                                <div class="rating_submit">
                                    <div class="form-group">
                                        <label class="d-block">Overall rating</label>
                                        <span class="rating mb-0">
                                            <input type="radio" class="rating-input" id="5_star" name="rating-input" value="5"><label for="5_star" class="rating-star"></label>
                                            <input type="radio" class="rating-input" id="4_star" name="rating-input" value="4"><label for="4_star" class="rating-star"></label>
                                            <input type="radio" class="rating-input" id="3_star" name="rating-input" value="3"><label for="3_star" class="rating-star"></label>
                                            <input type="radio" class="rating-input" id="2_star" name="rating-input" value="2"><label for="2_star" class="rating-star"></label>
                                            <input type="radio" class="rating-input" id="1_star" name="rating-input" value="1"><label for="1_star" class="rating-star"></label>
                                        </span>
                                    </div>
                                </div>
                                <!-- /rating_submit -->
                                <div class="form-group">
                                    <label>product name</label>
                                    <input class="form-control" type="text" name="title_m" placeholder="If you could say it in one sentence, what would you say?">
                                </div>
                                <p id="alert_titleM">
                                </p>
                                <div class="form-group">
                                    <label>About the product</label>
                                    <textarea class="form-control" name="text_m" style="height: 180px;" placeholder="Write your review to help others learn about this product"></textarea>
                                </div>
                                <label>Add your product price</label>
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <div style="right:5%;" class="numbers-row">
                                        <input type="text" value="1" name="mony" class="qty2">
                                        <div class="inc button_inc">+</div>
                                        <div class="dec button_inc">-</div>
                                        <div class="inc button_inc">+</div>
                                        <div class="dec button_inc">-</div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>You can choose multiple images for your product</label>
                                    <div class="fileupload">
                                        <input type="file" name="fileupload[]" onchange="viewimgem(this)" accept="image/*" multiple>
                                    </div>
                                </div>
                                <div id="al_fe_img">
                                </div>
                                <br>
                                <select name="Producer" class="custom-select custom-select-sm">
                                    <option selected>Choose the type of product</option>
                                    <option value="laptop">laptop</option>
                                    <option value="Phones">Phones</option>
                                    <option value="technology">technology</option>
                                    <option value="Clothes">Clothes</option>
                                    <option value="shoes">shoes</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Other than that">Other than that</option>
                                </select>
                                <p id="alert_seP">
                                </p>
                                <br>
                                <br>
                                <label>Choose an opponent</label>
                                <br>
                                <select name="discount" class="selectpicker">
                                    <option selected>undefined</option>
                                    <option value="10">10%</option>
                                    <option value="20">20%</option>
                                    <option value="30">30%</option>
                                    <option value="40">40%</option>
                                    <option value="50">50%</option>
                                    <option value="60">60%</option>
                                    <option value="70">70%</option>
                                    <option value="80">80%</option>
                                    <option value="90">90%</option>
                                </select>
                                <div class="form-group">
                                    <div class="checkboxes float-left add_bottom_15 add_top_15">
                                        <label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
                                            <input type="checkbox" name="checkbox_y">
                                            <span class="checkmark"></span>
                                            <p id="succes_In"></p>
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" class="btn_1" value="Send" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <?php include 'jquery.php';?>
    <script type="text/javascript">
     function viewimgem(objFileInput) {
      var C_IN_FILE = $(objFileInput)[0].files.length;

      for (let i = 0; i < C_IN_FILE; i++) 
          {
           if (objFileInput.files[i]) 
           {
                var fileReader = new FileReader();
                fileReader.onload = function(e) {
                    $("#al_fe_img").append('<img src="' + e.target.result + '"style="width:200px;border:2px solid red;">');
                }

                fileReader.readAsDataURL(objFileInput.files[i]);
            }
          }
      }
    </script>
</body>

</html>