<?php
include 'connect.php';

include('PHPMailerAutoload.php');
            $email="shivam1301b@gmail.com";
            $fname="shivam";
            $lname="sharma";
            // $msg="vaibhav";
            $html="<table><tr><td></td><td>$fname $lname thankyou for login on BloggerVerse by $email </td></table>";
            $mail=new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->Port=587;
            $mail->SMTPSecure="tls";
            $mail->SMTPAuth=true;
            $mail->Username="vaibhavsheoran00@gmail.com";
            $mail->Password="hbwcpcrdjaeyxumd";
            $mail->SetFrom("vaibhavsheoran00@gmail.com");
            $mail->addAddress($email);
            $mail->addAddress($email);
            $mail->AddCC($email);
            $mail->AddBCC($email);
            $mail->IsHTML(true);
            $mail->Subject="vaibhav";
            $mail->Body=$html;
            $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
            if($mail->send()){
                echo "Mail send to $fname";
            }else{
                echo "Error occur";
            }
    //         echo $msg;
      ?>