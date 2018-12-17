<?php


if(isset($_POST['submit'])){

    echo $nothing=$_POST['nothing'];
    echo  $name = $_POST['name'];
    echo  $work = $_POST['work'];
    echo  $number = $_POST['number'];
    echo  $email = $_POST['email'];
    echo  $workexp = $_POST['workexp'];
    echo  $year = $_POST['year'];
    echo  $resume = $_POST['resume'];
    echo  $pay = $_POST['pay'];
    echo  $Comments = $_POST['Comments'];



    /*$sql = mysqli_query($con, "insert into contact (cname,email,phone,subject,message)VALUES('$name','$email','$phone','$subject','$message' )");*/



    /*$to = 'allpointcleaningsys@gmail.com';


    $subject = 'User Details for Booking';
    $from=$email;

    $htmlContent = "
<h1>User Sending Message</h1>
<p><b>User Name: </b>".$name."</p>
<p><b>User Email: </b>".$email."</p>
<p><b>User Phone: </b>".$phone."</p>
<p><b>User Subject: </b>".$subject."</p>
<p><b>User Message: </b>".$message."</p>
";
// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
    $headers .= 'From:'.$from.''. "\r\n";
//send email
    @mail($to,$cc,$bcc,$from,$htmlContent,$headers);*/



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
        <title>F&U REAL ESTATE | CAREER</title>
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
                <li class="active">Career</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7" style="background-image: url(assets/img/mountainsunset.jpg);height: 100%; margin-top: -30px;">
    <div class="container">


        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 col-md-8" style="border: 1px solid;color: white;background: rgba(0,0,0,.45);">
                <div>&nbsp;</div><div>&nbsp;</div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="*Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                            <div class="form-group selectBox">*Type of Work
                                <select name="work" style="width: 182px;height: 45px;display: inline-block;" required>
                                    <option value="" hidden></option>
                                    <option value="Drywallrepairs">Drywall repairs</option>
                                    <option value="Flooring">Flooring</option>
                                    <option value="Tile">Tile</option>
                                    <option value="Siding">Siding</option>
                                    <option value="Framing">Framing</option>
                                    <option value="Painting">Painting</option>
                                    <option value="Masonry">Masonry</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="number" class="form-control" placeholder="*Phone Number" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="workexp" class="form-control" placeholder="*Previous Work Experience" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="year" class="form-control" placeholder="*Years of Experience" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <h5 style="color: white">*Do you have resume :</h5>
                                <input type="radio" name="resume" value="yes" required > Yes<br>
                                <input type="radio" name="resume" value="no" required> No<br>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">ATTACH RESUME:
                                <input type="file" name="file" class="form-control" placeholder="" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="pay" class="form-control" placeholder="Desire Pay" >
                            </div>
                        </div>

                        <input type="hidden" name="nothing" value="sfgdg">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message" style="height: 185px;">
                                <textarea class="form-control" name="Comments" placeholder="*Comments" required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                            <div class="send-btn">
                                <button type="submit" name="submit" value="submit" class="btn btn-color btn-md btn-message" style="margin-left: 100px;margin-top: -30px;">Submit</button>
                            </div>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2"></div>


        </div>
    </div>
</div>




<?php include 'footer.php'; ?>