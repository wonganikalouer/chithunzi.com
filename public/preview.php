<?php ?>

<html lang="en">
<head>
    <title>
        Chithunzi.com
    </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.mobile.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome/fontawesome.css">
    <script src="../vendor/jquery/jquery.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../vendor/gslib/gslib_client_v1.2.3.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="../assets/imgs/main_logo_sm.png"/>
    <meta name="viewport" content="width=device-width"/>
</head>
<body>
<?php require("views/header.php") ?>
<!-- This is a manual slider, not a real slider though, this will hold the most downloaded landscape photo and search key filter -->
<!-- id variables are to be separated with a "-" symbol, and declared with "_" when using in javascript or php -->
<div class="row m-0 p-0">
    <div class="col-md-0"></div>
    <div class="col-md-12">
        <div id="main-holder">
        <div id="preview-holder">
          <div class="w-100 float-left">
            <div class="w-100">
                <button class="btn btn-sm m-1 "> Author : Wongani Kaluwa</button>
                <button class="btn btn-sm  m-1 btn-info"> 250 likes</button>
                <button class="btn btn-sm m-1 btn-warning"> 5 Comments</button>
                <button class="btn btn-sm m-1 btn-success" title="click to download High Qualit Image"> Download <i class="fa fa-download"></i></button>
            </div>
            <img src="../assets/uploads/1114629.jpg" alt="" class="w-100 float-left">
          </div>
          </div>
        </div>
    </div>
    <div class="col-md-0"></div>
</div>

<div class="w-100">
    <?php require("views/footer.php"); ?>
</div>

<!-- TODO: To create a DivTag Paypal Merchant Account to be receiving donations and buy me a coffee payments. -->
<!-- This adds in a donate button -->
<script data-name="BMC-Widget" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="chithunzi"
        data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can also buy us a coffee!"
        data-color="#BD5FFF" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

</body>
</html>
<script src="../assets/js/main.js"></script>