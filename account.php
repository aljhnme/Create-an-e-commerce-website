<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Log in or register</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <h1>Sign In or Create an Account</h1>
                </div>
                <!-- /page_header -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <?php
                       session_start();
                       if (!isset($_SESSION['user_id'])) 
                       {
                      ?>
                        <form id="MyForm_l">
                            <div class="box_account">
                                <h3 class="client">Already Client</h3>
                                <div class="form_container">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email_l" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_l" id="password_l" value="" placeholder="Password*">
                                    </div>
                                    <h5 id="text_s_l"></h5>
                                    <div class="clearfix add_bottom_15">
                                        <div class="checkboxes float-left">
                                            <label class="container_check">
                                                Remember me
                                                <input type="checkbox" name="Remember" id="Remember">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="l_success_alert"></p>
                                    <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                                </div>
                            </div>
                        </form>
                        <?PHP
                         }else{
                        ?>
                        <div class="box_account">
                            <h3 class="client">Already Client</h3>
                            <div class="form_container">
                                <div class="row no-gutters">
                                    <p class="font-weight-bold">You are already registered. You want to log out<a href="logout.php">Logout</a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                        ?>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="box_account">
                            <h3 class="new_client">New Client</h3> <small class="float-right pt-2">*Required Fields</small>
                            <form id="MyForm">
                                <div class="form_container">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*">
                                    </div>
                                    <p class="email_alert"></p>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_r" value="" placeholder="Password*">
                                    </div>
                                    <p class="password_alert"></p>
                                    <div class="private box">
                                        <div class="row no-gutters">
                                            <div class="col-6 pr-1">
                                                <div class="form-group">
                                                    <input type="text" name="namef" class="form-control" placeholder="Name*">
                                                </div>
                                            </div>
                                            <div class="col-6 pl-1">
                                                <div class="form-group">
                                                    <input type="text" name="namel" class="form-control" placeholder="Last Name*">
                                                </div>
                                            </div>
                                            <p class="fullname_alert"></p>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control address" name="address" placeholder="Full Address">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row no-gutters">
                                            <div class="col-6 pr-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control City" name="city" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-6 pl-1">
                                                <div class="form-group">
                                                    <input type="text" name="Postal_Code" class="form-control" placeholder="Postal Code">
                                                </div>
                                                <p class="Postal_alert"></p>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row no-gutters">
                                            <div class="col-6 pr-1">
                                                <div class="form-group">
                                                    <div class="custom-select-form">
                                                        <select class="wide add_bottom_10" name="country" id="country">
                                                            <option value="" selected>Country</option>
                                                            <option value="Europe">Europe</option>
                                                            <option value="United states">United states</option>
                                                            <option value="Asia">Asia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pl-1">
                                                <div class="form-group">
                                                    <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                                                </div>
                                                <p class="telephone_alert"></p>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                    <!-- /private -->
                                    <hr>
                                    <div class="form-group">
                                        <p class="success_alert"></p>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Register" class="btn_1 full-width">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <?php include 'jquery.php'; ?>
</body>

</html>