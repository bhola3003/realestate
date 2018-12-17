<?php


if(isset($_POST['submit'])){

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $zipcode = $_POST['zipcode'];
     $property = $_POST['property'];
     $homedescription = $_POST['homedescription'];



    /* $sql = mysqli_query($con, "insert into contact (cname,email,phone,subject,message)VALUES('$name','$email','$phone','$subject','$message' )");*/



    $to = 'nenad.petrovic@park.edu';
    $cc = '' ;
    $bcc = '';

    $subject = 'User Details for Booking';
    $from=$email;

    $htmlContent = "
<h1>User Sending Message</h1>
<p><b>User First Name: </b>".$fname."</p>
<p><b>User Last Name: </b>".$lname."</p>
<p><b>User Email: </b>".$email."</p>
<p><b>User Phone: </b>".$phone."</p>
<p><b>User Address: </b>".$address."</p>
<p><b>User City: </b>".$city."</p>
<p><b>User State: </b>".$state."</p>
<p><b>User Zipcode: </b>".$zipcode."</p>
<p><b>User Property Type: </b>".$property."</p>
<p><b>User Home Description: </b>".$homedescription."</p>
";
// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
    $headers .= 'From:'.$from.''. "\r\n";
//send email
    @mail($to,$cc,$bcc,$from,$htmlContent,$headers);




}

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script>-->
    <!-- End Google Tag Manager -->
    <title>F&U REAL ESTATE | CONTACT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <!--<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >-->

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="../../fonts.googleapis.com/css65e6.css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="../../www.googletagmanager.com/ns189f.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--<div class="page_loader"></div>-->

<!-- Top header start -->

<!-- Top header end -->

<!-- main header start -->
<?php include 'header.php' ;?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area"><div>&nbsp;</div>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<br><h1><span style="padding-left: 500px;">WE BUY HOMES</span></h1>
<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">

            <h3>Sell your house for cash, Regardless of Condition and Situation </h3>
            <h5>Get a free quote NOW</h5>
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="fname" class="form-control" placeholder="*First Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="text" name="lname" class="form-control" placeholder="*Last Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="email" name="email" class="form-control" placeholder="*Email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="*Number" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="address" class="form-control" placeholder="*Address" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="city" class="form-control" placeholder="*City" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="text" name="state" class="form-control" placeholder="*State" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="zipcode" class="form-control" placeholder="*Zipcode" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject" required>*Type of property
                                <select name="property" class="form-control" >
                                    <option value=""></option>
                                    <option value="House">House</option>
                                    <option value="Condo">Condo</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="RentalProperty">Rental Property</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="homedescription" placeholder="*Home Description" required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" name="submit" class="btn btn-color btn-md btn-message">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <p style="font-size: 20px">MANAGEMENT CONTACT</p>
                    <div class="media">
                        <i class="fa fa-user-o"></i>
                        <div class="media-body">
                            <h5 class="mt-0"><b>CEO:</b></h5>
                            <p>Nenad & Tamara Petrovic</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0"><b>Address</b></h5>
                            <p>123 Main Street, Kansas City, MO 64151</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0"><b>Phone</b> </h5>
                            <p><a href="tel:111-111-1111"> 111-111-1111</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0"><b>Email</b> </h5>
                            <p><a href="mailto:willbeprovided@soon.com">willbeprovided@soon.com</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->



<?php include 'footer.php'; ?>