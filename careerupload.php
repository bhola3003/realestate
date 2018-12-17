<?php


if(isset($_POST['submit'])){

    echo 'jjj'.$name = $_POST['name'];
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