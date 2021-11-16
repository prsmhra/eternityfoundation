<?php
    // use PHPMailer\PHPMailer\PHPMailer;
    // print_r($_POST);
    // include('smtp/PHPMailerAutoload.php');
    // if(isset($_POST['name']) && isset($_POST['email'])){
    //     $name=$_POST['name'];
    //     $email=$_POST['email'];
    //     $subject=$_POST['subject'];
    //     $body=$_POST['body'];
    //     $phone=$_POST['phone'];
    //     $file = $_FILES['file']['name'];
    //     $tmp_file = $_FILES['file']['tmp_name'];
    //     // $password = "Bl@ckclover1";
    //     echo $name . '::' .$email.'::'.$file.'::'.$tmp_file;
    //     echo smtp_mailer("parasmehra1891@gmail.com",$subject,$body,$email);
    // }
    // function smtp_mailer($to,$subject, $msg,$email){
    //     $mail = new PHPMailer(); 
    //     $mail->SMTPDebug  = 3;
    //     $mail->IsSMTP(); 
    //     $mail->SMTPAuth = true; 
    //     $mail->SMTPSecure = 'tls'; 
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->Port = 587; 
    //     $mail->IsHTML(true);
    //     $mail->CharSet = 'UTF-8';
    //     $mail->Username = "parasmehra003@gmail.com";
    //     $mail->Password = "Bl@ckclover1";
    //     $mail->SetFrom("parasmehra003@gmail.com");
    //     $mail->Subject = $subject;
    //     $mail->Body =$msg;
    //     $mail->AddAddress($to);
    //     $mail->SMTPOptions=array('ssl'=>array(
    //         'verify_peer'=>false,
    //         'verify_peer_name'=>false,
    //         'allow_self_signed'=>false
    //     ));
    //     if(!$mail->Send()){
    //         echo $mail->ErrorInfo;
    //     }else{
    //         return 'Sent';
    //     }
    // }

    // if(isset($_POST['submit'])) {
    //     $mailto = "parasmehra003@gmail.com";  //My email address
    //     //getting customer data
    //     // $name = $_POST['name']; //getting customer name
    //     // $fromEmail = $_POST['email']; //getting customer email
    //     // $phone = $_POST['tel']; //getting customer Phome number
    //     // $subject = $_POST['subject']; //getting subject line from client
    //     // $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
    //     $name=$_POST['name'];
    //     $email=$_POST['email'];
    //     $subject=$_POST['subject'];
    //     $body=$_POST['body'];
    //     $phone=$_POST['phone'];
    //     //Email body I will receive
    //     $message = "Cleint Name: " . $name . "\n"
    //     . "Phone Number: " . $phone . "\n\n"
    //     . "Client Message: " . "\n" .$body; // $_POST['message'];
        
    //     //Message for client confirmation
    //     // $message2 = "Dear" . $name . "\n"
    //     // . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
    //     // . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    //     // . "Regards," . "\n" . "- HMA WebDesign";
        
    //     //Email headers
    //     $headers = "From: " . $email; // Client email, I will receive
    //     // $headers2 = "From: " . $mailto; // This will receive client
        
    //     //PHP mailer function
    //     echo $message.'::'.$email;
    //     $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
    //     // $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
        
    //     //Checking if Mails sent successfully
    
    //     if ($result1 && $result2) {
    //         $success = "Your Message was sent Successfully!";
    //     } else {
    //         $failed = "Sorry! Message was not sent, Try again Later.";
    //     }
    
    // }

    $to_email = "paras.raddik123@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is test email send by PHP Script";
    $headers = "From: parasmehra003@gmail.com";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
?>