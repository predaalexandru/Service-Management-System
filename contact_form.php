<?php 
//Contact form will work on live server only
if(isset($_REQUEST['submit'])) {
    // Checking for Empty Fields
    if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")) {
        // Msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else {
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];

        $mailTo = "YOUR EMAIL ADDRESS";
        $headers = "From: ".$email;
        $text = "You have received an email from ". $name. ".\n\n".$message;
        mail($mailTo, $subject, $headers, $text);
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Sent Successfully</div>';
    }
}
?>

<div class="col-md-8">
                <form action="" method="POST">
                    <input type="text" class="form-control" name="name" placeholder="Name"><br>
                    <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                    <input type="email" class="form-control" name="email" placeholder="Email"><br>
                    <textarea name="message" class="form-control" style="height: 150px;" placeholder="How can we help you?"></textarea><br>
                    <input type="submit" class="btn btn-dark" name="submit" value="Send"><br><br>
                    <?php if(isset($msg)) { echo $msg; } ?>
                </form>
            </div>