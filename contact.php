<?php use PHPMailer\PHPMailer\PHPMailer; ?>
<?php use PHPMailer\PHPMailer\SMTP; ?>
<?php use PHPMailer\PHPMailer\Exception;?>
<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<?php
require './vendor/autoload.php';

if(isset($_POST['submit'])){
    $to = "stevekdoikas@hotmail.com";
    $subject = wordwrap($_POST['subject'], 70);
    $body = $_POST['body'];
    $header =$_POST['email'];
    $mail = new PHPMailer();
            $mail->isSMTP();                                            
            $mail->Host       = Config::SMTP_HOST;                    
            $mail->SMTPAuth   = true;
            $mail->Username   = Config::SMTP_USER;                     
            $mail->Password   = Config::SMTP_PASSWORD;                                                                                   
            $mail->SMTPSecure = 'tls';            
            $mail->Port       = Config::SMTP_PORT;
            $mail->isHTML(true);
            $mail->CharSet = 'utf-8';
            // $mail->setFrom($header, 'Stefanos Doikas');
            $mail->addAddress($to);
            $mail->From = $header;
            $mail->Subject = $subject;
            $mail->Body = $body;
            if($mail->send()){
                $emailSent = true;
            }  else {
                echo "Oups Error {$mail->ErrorInfo}";
            }   
}
?>

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Contact</h1>
                    <form role="form" action="" method="post" id="contact-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                         </div>
                         <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                         <div class="form-group">
                            <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
