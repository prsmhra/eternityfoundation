<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email']){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $body=$_POST['body'];
        $phone=$_POST['phone'];

        require_once "asset/PHPMailer/PHPMailer.php";
        require_once "asset/PHPMailer/SMTP.php";
        require_once "asset/PHPMailer/Exception.php";
        $mail = new PHPMailer();

        #SMTP setting
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth=true;
        $mail->username="parasmehra003@gmail.com";
        $mail->Password="Bl@ckclover1";
        $mail->Port=465;
        $mail->SMTPSecure="ssl";

        #email settings
        $mail->isHTML(true);
        $mail->serFrom($email,$name);
        $mail->addAddress("parasmehra003@gmail.com");
        $mail->Subject=("$subject");
        $mail->Body=("$body \n $phone \n $name");

        if($mail->send()){
            $status = "success";
            $response="Email is Send!";
        }else{
            $status="failed";
            $response = "Something went wrong: <br> ".$mail->ErrorInfo;
        }

        exit(json_encode(array("status" = > $status,"response"=>$response)));
    }