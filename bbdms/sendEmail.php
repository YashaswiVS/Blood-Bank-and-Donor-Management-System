<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "sjec.bbdms22@gmail.com"; //enter you email address
    $mail->Password = 'Sjec.2022'; //enter you email password
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("sjec.bbdms22@gmail.com"); //enter you email address
    $mail->Subject = ($subject);
    $mail->Body = "Blood Request from " . $email . "<br> Name of recipient : " .$name. "<br>". $body. "<br>";

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";
    } else {
        $status = "failed";
        $response = "Something went wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
